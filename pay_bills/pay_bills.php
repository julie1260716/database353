<?php
	//connect to db
    include("../db_connection.php");

	if(isset($_COOKIE["cli_fname"]))
    	$cli_fname = $_COOKIE["cli_fname"];
    if(isset($_COOKIE["cli_id"]))
    	$cli_id = $_COOKIE["cli_id"];

    $bills = array(
		"Electricity" => 300, 
		"Rent" => 700);

    $cookie_bills = serialize($bills);
	$bill_list = "bills";
	setcookie($bill_list, $cookie_bills, time() + (86400 *30), "/");

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
	
	mysqli_close($db);
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Pay bills</title>
        <meta name="description" content="Comp 353 Project">
        <link rel="stylesheet" href="main_stylesheet.css">
    </head>
    <body>
      <div id="container">
        <a href="../signup_login/login.php"><button type="submit" style="font-size: 16px; float:right; margin-right:20px;">Log out</button></a>
          <a href="../home_page/home_page.php"><button type="submit" style="font-size: 16px; float:right;">Homepage</button></a>        <h1>BANK.</h1>
        <h2>Welcome to Online Banking</h2>

        <form action="pay_bills_action.php" method="post">

			<div class="flex-container">   
				<div class = "account">   
					<p class="subtitle">Paying bills</p>
					    <ul> 
						   <li><a href="../home_page/home_page.php">Home page</a></li>
						   <li><a href="../send_money/send_money.php">Send money</a></li>
						   <li><a href="../transfer_money/transfer_money.php">Transfer money</a></li>
						   <li><a href="../transaction_history/transaction_history.php">Transaction history</a></li>
						 </ul>
					<br>
					<label> Account </label>
					<?php
							$list_acc = $account + $credit;
					?> 


					<select name = "sender">
						<?php foreach($list_acc as $key => $value) { ?>
							<option value="<?php echo $key ?>"><?php echo $key; echo ": ",$value; ?></option>
						<?php }?>
					</select>

					<br>

					<label> Bills </label>
					<?php
							$list_bill = unserialize($_COOKIE[$bill_list]);
					?>

					<select name = "pay_bill"> 
						<?php foreach($list_bill as $key => $value) { ?>
							<option value="<?php echo $key ?>"><?php echo $key; echo " bills: ",$value; ?></option>
						<?php }?>
					</select>

					</div>
					<button type="submit" style="font-size: 16px">Confirm</button>
					<br><br>
					<button type="submit" style="font-size: 16px">Apply for new credit</button>
					<button type="submit" style="font-size: 16px" formaction="">Open new account</button>
				</div>
		   </div><!--end of flex-container-->
    </form> 
       
     </div><!--end of container div-->
        
    </body>
</html>
