<?php
	$msg = "Success!";
	if($_SERVER["REQUEST_METHOD"] == "POST") {
    	$sender = $_POST['sender'];
    	$receiver = $_POST['pay_bill'];
    }

    include("../db_connection.php");

	if(isset($_COOKIE["cli_fname"]))
    	$cli_fname = $_COOKIE["cli_fname"];
    if(isset($_COOKIE["cli_id"]))
    	$cli_id = $_COOKIE["cli_id"];

    $cookie_rec = unserialize($_COOKIE['bills']);
    $amount = $cookie_rec[$receiver];

    $account = array ();

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

				foreach ($cookie_rec as $key1 => $value1) {
					if ($key1 == $receiver){
						$value1 = 0;
					}
					$cookie_rec[$key1] = $value1;
				}

				$paid[$sender] = $value;
			}
			else
				$msg = "Not enough fund, please check your account again!";
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


		setcookie("bills", serialize($cookie_rec), time() + (86400 *30), "/");

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
        <h2>Confirm transfer between account</h2>     
            <p class="subtitle">Your Client Card Number is #<?php echo $cli_id ?></p> 
              <br>
              <h3 style="color:red"><? echo $msg ?> </h3>
               <div class="flex-container">   
                    <form>
                        <label class="confirm">First Name</label>       
                        <p><?php echo $cli_fname ?></p>         
                        <label  class="confirm">Sender</label>     
                        <p><?php echo $sender ?></p>          
                        <label class="confirm">Account balance</label>
                        <p><?php echo $paid[$sender] ?></p>
                        <label  class="confirm">Amount paid</label>    
                        <p><?php echo $amount ?></p>          
                        <label  class="confirm">Receiver</label>     
                        <p><?php echo $receiver ?></p>
                    </form>
            	</div><!--end of flex-container--> 
          
        <br><br>  
                 
     </div><!--end of container div-->
        
    </body>
</html>