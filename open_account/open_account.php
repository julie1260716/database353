
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

        <form method ="post" action = "open_account_action.php">

			<div class="flex-container">   
				<div class = "account">   
					<p class="subtitle">Please enter information below</p>
					    <ul> 
						   <li><a href="../send_money/send_money.php">Send money</a></li>
						   <li><a href="../transfer_money/transfer_money.php">Transfer moneyt</a></li>
						   <li><a href="../pay_bills/pay_bills.php">Pay bills</a></li>
						   <li><a href="../transaction_history/transaction_history.php">Transaction history</a></li>
						 </ul>
					<br>
					<table>
						<tr>
							<td>ID</td>
							<td>Type</td>
							<td>Service</td>
							<td>Annual Fee</td>
						</tr>
						
						<tr>
							<td>01</td>
							<td>Personal</td>
							<td>Checking</td>
							<td>20</td>
						</tr>

						<tr>
							<td>02</td>
							<td>Business</td>
							<td>Checking</td>
							<td>50</td>
						</tr>
						<tr>
							<td>03</td>
							<td>Cooperate</td>
							<td>Checking</td>
							<td>100</td>
						</tr>
						<tr>
							<td>04</td>
							<td>Personal</td>
							<td>Saving</td>
							<td>20</td>
						</tr>
						<tr>
							<td>05</td>
							<td>Business</td>
							<td>Saving</td>
							<td>50</td>
						</tr>
						<tr>
							<td>06</td>
							<td>Cooperate</td>
							<td>Saving</td>
							<td>100</td>
						</tr>
						<tr>
							<td>07</td>
							<td>Personal</td>
							<td>Insurance</td>
							<td>20</td>
						</tr>
						<tr>
							<td>08</td>
							<td>Business</td>
							<td>Insurance</td>
							<td>50</td>
						</tr>
						<tr>
							<td>09</td>
							<td>Cooperate</td>
							<td>Insurance</td>
							<td>100</td>
						</tr>
						<tr>
							<td>10</td>
							<td>Personal</td>
							<td>Investment</td>
							<td>20</td>
						</tr>
						<tr>
							<td>11</td>
							<td>Business</td>
							<td>Investment</td>
							<td>50</td>
						</tr>
						<tr>
							<td>12</td>
							<td>Cooperate</td>
							<td>Investment</td>
							<td>100</td>
						</tr>
						
					</table>

					<br>

					Account type ID you choose(please choose one only): <input type="text" name="new_acc_type_id"> <button type="submit">Submit</button>
				</div>
		   </div><!--end of flex-container-->
    </form> 
       
     </div><!--end of container div-->
        
    </body>
</html>
