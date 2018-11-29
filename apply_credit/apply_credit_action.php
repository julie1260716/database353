<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $account_type_id = $_POST['new_acc_type_id'];
}

$msg = "Sucess!";

include("../db_connection.php");

if(isset($_COOKIE["cli_fname"]))
    $cli_fname = $_COOKIE["cli_fname"];
if(isset($_COOKIE["cli_id"]))
    $cli_id = $_COOKIE["cli_id"];

if ($account_type_id <=0 or $account_type_id > 3)
    $msg = "Fail";

if ($msg == "Sucess!") {
    $new_acc_number = random_int(100000000, 999999999);

    $account = array ();

    $query = "INSERT INTO credit_card VALUES ('$new_acc_number', 0 , '$account_type_id', '$cli_id')";
    mysqli_query($db, $query) or die("Error with query");
}
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Apply credit</title>
        <meta name="description" content="Comp 353 Project">
        <link rel="stylesheet" href="main_stylesheet.css">
    </head>
    <body>
      <div id="container">
        <a href="../signup_login/login.php"><button type="submit" style="font-size: 16px; float:right; margin-right:20px;">Log out</button></a>
        <a href="../home_page/home_page.php"><button type="submit" style="font-size: 16px; float:right;">Homepage</button></a>
        <h1>BANK.</h1>
        <h2>Welcome to Online Banking</h2>

        <form action="../signup/signup.php">

			<div class="flex-container">   
				<div class = "account">   
					<p class="subtitle">Please enter information below</p>
					    <ul> 
						   <li><a href="../send_money/send_money.php">Send money</a></li>
						   <li><a href="../transfer_money/transfer_money.php">Transfer money</a></li>
						   <li><a href="../pay_bills/pay_bills.php">Pay bills</a></li>
						   <li><a href="../transaction_history/transaction_history.php">Transaction history</a></li>
						 </ul>
					<br>
					
					<h3 style="color: blue;">Thank you for working with us! </h3>

					<label>Here is your new account information</label>

					<table>
						<tr>
							<td>Type</td>
							<td>Limit</td>
							<td>Interst rate</td>
						</tr>

						<?php
							if ($account_type_id == 1) { ?>
								<tr>
									<td>01</td>
									<td>5000</td>
									<td>10 %</td>
								</tr>

							<?php } ?>

						<?php
							if ($account_type_id == 2) { ?>
								<tr>
									<td>02</td>
									<td>25000</td>
									<td>15 %</td>
								</tr>

							<?php } ?>

						<?php
							if ($account_type_id == 3) { ?>
								<tr>
									<td>03</td>
									<td>100 000</td>
									<td>20%</td>
								</tr>

							<?php } ?>
							

					</table>
				</div>
		   </div><!--end of flex-container-->
    </form> 
       
     </div><!--end of container div-->
        
    </body>
</html>
