<?php
    $msg = "Success!";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $sender = $_POST['sender'];
        $receiver = $_POST['send_to'];
        $amount = $_POST['amt'];
    }

    include("../db_connection.php");

    if(isset($_COOKIE["cli_fname"]))
        $cli_fname = $_COOKIE["cli_fname"];
    if(isset($_COOKIE["cli_id"]))
        $cli_id = $_COOKIE["cli_id"];

    $account = array ();

    $query = "SELECT account_number FROM account WHERE account_number='$receiver'";
    mysqli_query($db, $query) or die("Error with query");
    //Get Result set
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);

    if (empty($row))
        $msg = "Account number sending to is not found, please try again!";


    $query = "SELECT * FROM account WHERE account_holder_id='$cli_id'";
    mysqli_query($db, $query) or die("Error with query");
    //Get Result set
    $result = mysqli_query($db, $query);
    while ($row = mysqli_fetch_array($result)) {
        $cookie_account = htmlspecialchars($row['account_number']);
        $account_balance = htmlspecialchars($row['account_balance']);

        $account[$cookie_account]= $account_balance;
    }

    $credit = array();
    $query = "SELECT * FROM credit_card WHERE credit_card_account_id = '$cli_id'";
    mysqli_query($db, $query) or die("Error with query");
    //Get Result set
    $result = mysqli_query($db, $query);
    while ($row = mysqli_fetch_array($result)) {
        $cookie_credit = htmlspecialchars($row['credit_card_id']);
        $credit_card_balance = htmlspecialchars($row['credit_card_balance']);
        
        $credit[$cookie_credit] = $credit_card_balance;
   }

   $paid = $account + $credit;
   foreach ($paid as $key => $value) {
        if ($key == $sender)
            if (($value - $amount) >= 0){
                $value = $value - $amount;
            }
            else
                $msg = "Not enough fund, please check your account again!";

        $paid[$key] = $value;
    }
    if ($msg== "Success!"){
        //Update account table
        $query = "SELECT account_number FROM account where account_number = '$sender'";
        mysqli_query($db, $query) or die("Error with query");
        //Get Result set
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_array($result);

        if (empty($row)){
            $query = "UPDATE credit_card SET credit_card_balance = '$paid[$sender]' where credit_card_id = '$sender'";
            mysqli_query($db, $query) or die("Error with query");
        }
    
        //Update account table
        $query = "UPDATE account SET account_balance = '$paid[$sender]' where account_number = '$sender'";
        mysqli_query($db, $query) or die("Error with query");


        //Receiver account update
        $query = "SELECT * FROM account WHERE account_number='$receiver'";
        mysqli_query($db, $query) or die("Error with query");
        //Get Result set
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_array($result);
        $update = $row['account_balance'] + $amount;
        //update receuver table
        $query = "UPDATE account SET account_balance = '$update' where account_number = '$receiver'";
        mysqli_query($db, $query) or die("Error with query");
    

        //UPDATE transaction table
        $query = "SELECT MAX(transaction_id) FROM transaction_history";
        mysqli_query($db, $query) or die("Error with query");
        //Get Result set
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_array($result);

        $num = $row[0] +1;

        
        $query = "INSERT INTO transaction_history VALUES ('$num', '$cli_id', '$receiver', '$amount')";
        mysqli_query($db, $query) or die("Error with query");
    }

    mysqli_close($db);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Confirmation Page</title>
        <meta name="description" content="Comp 353 Confirmation Page">
        <link rel="stylesheet" href="main_stylesheet.css">
    </head>
    <body>
   
    <div id="container">
        <a href="../signup_login/login.php"><button type="submit" style="font-size: 16px; float:right; margin-right:20px;">Log out</button></a>
        <a href="../home_page/home_page.php"><button type="submit" style="font-size: 16px; float:right;">Homepage</button></a>
       <h1>BANK.</h1>
        <h2>Confirm sending money</h2>     
            <p class="subtitle">Your Client Card Number is #<?php echo $cli_id ?></p> 
              <br>
               <div class="flex-container">   
                    <form>
                        <h3 style="color: red;"> <?php echo $msg ?> </h3>
                        <label class="confirm">First Name</label>       
                        <p><?php echo $cli_fname ?></p>         
                        <label  class="confirm">Sender</label>     
                        <p><?php echo $sender ?></p>          
                        <label  class="confirm">Amount Transfer</label>    
                        <p><?php echo $amount ?></p>          
                        <label  class="confirm">Receiver</label>     
                        <p><?php echo $receiver ?></p>
                    </form>
                </div><!--end of flex-container--> 
          
        <br><br>  
                 
     </div><!--end of container div-->
        
    </body>
</html>