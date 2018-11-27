
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

        <form method ="post" action = "apply_credit_action.php">

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
							<td>Type</td>
							<td>Limit</td>
							<td>Interst rate</td>
						</tr>
						
						<tr>
							<td>01</td>
							<td>5000</td>
							<td>10 %</td>
						</tr>

						<tr>
							<td>02</td>
							<td>25000</td>
							<td>15 %</td>
						</tr>
						<tr>
							<td>03</td>
							<td>100 000</td>
							<td>20%</td>
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
