<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$account_type_id = $_POST['new_acc_type_id'];
	}
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Open account</title>
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
							<td>ID</td>
							<td>Type</td>
							<td>Service</td>
							<td>Annual Fee</td>
						</tr>

						<?php
							if ($account_type_id == 1) { ?>
								<tr>
									<td>01</td>
									<td>Personal</td>
									<td>Investment</td>
									<td>100</td>
								</tr>

							<?php } ?>

						<?php
							if ($account_type_id == 2) { ?>
								<tr>
									<td>02</td>
									<td>Personal</td>
									<td>Banking</td>
									<td>100</td>
								</tr>

							<?php } ?>

						<?php
							if ($account_type_id == 3) { ?>
								<tr>
									<td>03</td>
									<td>Personal</td>
									<td>Saving</td>
									<td>100</td>
								</tr>

							<?php } ?>

						<?php
							if ($account_type_id == 4) { ?>
								<tr>
									<td>04</td>
									<td>Business</td>
									<td>Investment</td>
									<td>1000</td>
								</tr>

							<?php } ?>

						<?php
							if ($account_type_id == 5) { ?>
								<tr>
									<td>05</td>
									<td>Business</td>
									<td>Banking</td>
									<td>1000</td>
								</tr>

							<?php } ?>

						<?php
							if ($account_type_id == 6) { ?>
								<tr>
									<td>06</td>
									<td>Business</td>
									<td>Saving</td>
									<td>1000</td>
								</tr>

							<?php } ?>

						<?php
							if ($account_type_id == 7) { ?>
								<tr>
									<td>07</td>
									<td>Cooperate</td>
									<td>Investment</td>
									<td>10000</td>
								</tr>

							<?php } ?>

						<?php
							if ($account_type_id == 8) { ?>
								<tr>
									<td>08</td>
									<td>Cooperate</td>
									<td>Banking</td>
									<td>10000</td>
								</tr>

							<?php } ?>

						<?php
							if ($account_type_id == 9) { ?>
								<tr>
									<td>09</td>
									<td>Cooperate</td>
									<td>Saving</td>
									<td>10000</td>
								</tr>

							<?php } ?>
							

					</table>
				</div>
		   </div><!--end of flex-container-->
    </form> 
       
     </div><!--end of container div-->
        
    </body>
</html>
