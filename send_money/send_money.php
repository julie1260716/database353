
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Send money</title>
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
					<p class="subtitle">Sending money</p>
					    <ul> 
						   <li><a href="../home_page/home_page.php">Home page</a></li>
						   <li><a href="../transfer_money/transfer_money.php"">Transfer money</a></li>
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

					Account
					<select>
						<option value="40023289">40023289</option>
						<option value="5004789">5004789</option>
					</select>

					<br>

					Amount: <input type="text" name="amount">
					
					<br>
					
					Receiver email: <input type="text" name="receiver">

					<br>
					<button type="submit" style="font-size: 16px">Confirm</button>
				</div>
		   </div><!--end of flex-container-->
    </form> 
       
     </div><!--end of container div-->
        
    </body>
</html>
