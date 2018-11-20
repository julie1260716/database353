<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Transfer money</title>
        <meta name="description" content="Comp 353 Project">
        <link rel="stylesheet" href="main_stylesheet.css">
    </head>
    <body>
      <div id="container">
        <h1>BANK.</h1>
        <h2>Welcome to Online Banking</h2>

        <form action="../signup/signup.php">

			<div class="flex-container">   
				<div class = "account">   
					<p class="subtitle">Transfering money</p>
					    <ul> 
						   <li><a href="../home_page/home_page.php">Home page</a></li>
						   <li><a href="../send_money/send_money.php">Send money</a></li>
						   <li><a href="../pay_bills/pay_bills.php">Pay bills</a></li>
						   <li><a href="../transaction_history/transaction_history.php">Transaction history</a></li>
						 </ul>

					<br>
					<button type="submit" style="font-size: 16px" formaction="../home_page/home_page.php">Back to home</button>
					<form method="" action="../employee_home_page/employee_home_page.php">
		              <button type="submit" style="font-size: 16px">Log out</button>
		            </form>
					<br>
					<br>

					<table class="display_account"> From account
						<select>
							<option value="40023289">40023289</option>
							<option value="5004789">5004789</option>
						</select>

						<br>

						<tr class="account_info">
							<td id="account_balance">CDN 9999</td>
						</tr>

						<tr>
							Amount: <input type="text" name="amount"> from
						</tr>
					</table>

					<br> 
					
					<table class="display_account">To account
						<select>
							<option value="40023289">40023289</option>
							<option value="5004789">5004789</option>
						</select>

						<br>

						<tr class="account_info">
							<td id="account_balance">5004789</td>
						</tr>
					</table>

					<br>
					<button type="submit" style="font-size: 16px">Confirm</button>
				</div>
		   </div><!--end of flex-container-->
    </form> 
       
     </div><!--end of container div-->
        
    </body>
</html>
