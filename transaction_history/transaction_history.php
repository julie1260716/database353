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

   	$transaction_history = array ();
   	$query = "SELECT * FROM transaction_history WHERE transaction_from_account='$cli_id'";
    mysqli_query($db, $query) or die("Error with query");
    //Get Result set
    $result = mysqli_query($db, $query);
    while ($row = mysqli_fetch_array($result)) {
    	foreach ($row as $key => $value)
    		$transaction_history[$key] = $value;
    }

    print_r($transaction_history);
   mysqli_close($db);
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Transaction history</title>
        <meta name="description" content="Comp 353 Project">
        <link rel="stylesheet" href="main_stylesheet.css">
    </head>
    <body>
      <div id="container">
         <a href="../signup_login/login.php"><button type="submit" style="font-size: 16px; float:right; margin-right:20px;">Log out</button></a>
          <a href="../home_page/home_page.php"><button type="submit" style="font-size: 16px; float:right;">Homepage</button></a>
        <h1>BANK.</h1>
        <h2>Welcome to Online Banking</h2>

        <form class="add_customer_form">

			<div class="flex-container">   
				<div class = "account">   
					<p class="subtitle">Transaction history</p>
					    <ul> 
						   <li><a href="../home_page/home_page.php">Home page</a></li>
						   <li><a href="../send_money/send_money.php">Send money</a></li>
						   <li><a href="../transfer_money/transfer_money.php">Transfer money</a></li>
						   <li><a href="../pay_bills/pay_bills.php">Pay bills</a></li>
						 </ul>
					<br>
					
					<table>
						<tr>
						   <td>Transaction ID</td>
				           <td>Client ID</td>
				           <td>Receiver</td>
				           <td>Amount</td>
				        </tr>
						<?php for ($x = 0; $x < sizeof($transaction_history); $x = $x + 4) { ?>
						        <tr>
						           <td><?php echo $transaction_history['transaction_id'] ?></td>
						           <td><?php echo $transaction_history['transaction_from_account'] ?></td>
						           <td><?php echo $transaction_history['transaction_to_payee'] ?></td>
						           <td><?php echo $transaction_history['transaction_amount'] ?></td>
						           	
						           </td>
						        </tr>
						<?php
							}
						?>
					</table>

					<br>
					<button type="submit" style="font-size: 16px">Apply for new credit</button>
					<button type="submit" style="font-size: 16px" formaction="">Open new account</button>
				</div>
		   </div><!--end of flex-container-->
    </form> 
       
     </div><!--end of container div-->
        
    </body>
</html>
