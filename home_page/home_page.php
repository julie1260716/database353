<?php
	//connect to db
    include("../db_connection.php");

	if(isset($_COOKIE["cli_fname"]))
    	$cli_fname = $_COOKIE["cli_fname"];
    if(isset($_COOKIE["cli_id"]))
    	$cli_id = $_COOKIE["cli_id"];

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
        <title>Home Page</title>
        <meta name="description" content="Comp 353 Project">
        <link rel="stylesheet" href="main_stylesheet.css">
    </head>
    <body>
      <div id="container">
        <a href="../signup_login/login.php"><button type="submit" style="font-size: 16px; float:right; margin-right:20px;">Log out</button></a>
        <h1>BANK.</h1>
        <h2>Welcome to Online Banking</h2>

        <form>

			<div class="flex-container">   
				<div class = "account">   
					<p class="subtitle">Hello <?php echo $cli_fname; ?></p>
					    <ul> 
						   <li><a href="../send_money/send_money.php">Send money</a></li>
						   <li><a href="../transfer_money/transfer_money.php">Transfer money</a></li>
						   <li><a href="../pay_bills/pay_bills.php">Pay bills</a></li>
						   <li><a href="../transaction_history/transaction_history.php">Transaction history</a></li>
						 </ul>

					<br>

					<label>Account</label>
					<table class="display_account"> 
						<tr>
							<td>Account number</td>
							<td>Balance</td>
						</tr>

						<?php foreach ($account as $key => $value) { ?>
					        <tr>
					           <td><?php echo $key; ?></td>
					           <td><?php echo $value ?></td>
					        </tr>
					    <?php } ?>
					</table>

					<label>Credit card</label>
					<table class="credit_card_line">
						<tr>
							<td>Account number</td>
							<td>Balance</td>
						</tr>
						
						<?php foreach ($credit as $key => $value) { ?>
					        <tr>
					           <td><?php echo $key ?></td>
					           <td><?php echo $value ?></td>
					        </tr>
					    <?php } ?>
					</table>

					<br>
					<button type="submit" style="font-size: 16px" formaction="../apply_credit/apply_credit.php">Apply for new credit</button>
					<button type="submit" style="font-size: 16px" formaction="../open_account/open_account.php">Open new account</button>
				</div>
		   </div><!--end of flex-container-->
    </form> 
       
     </div><!--end of container div-->
        
    </body>
</html>
