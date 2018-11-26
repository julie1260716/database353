
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Apply Credit</title>
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
					<p class="subtitle">Please enter information below</p>
					    <ul> 
						   <li><a href="../send_money/send_money.php">Send money</a></li>
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

					<table>
						<tr>
							<td>ID</td>
							<td>Type</td>
							<td>Interest Rate</td>
							<td>Annual Fee</td>
							<td>Limit</td>
						</tr>
						
						<tr>
							<td>01</td>
							<td>Regular</td>
							<td>1%</td>
							<td>100</td>
							<td>1000</td>
						</tr>
						
					</table>

					<br>

					Credit Card ID you choose: <input type="text" name="id"> <button formaction="../home_page/home_page.php">Submit</button>
				</div>
		   </div><!--end of flex-container-->
    </form> 
       
     </div><!--end of container div-->
        
    </body>
</html>
