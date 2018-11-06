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
        <h1>BANK.</h1>
        <h2>Welcome to Online Banking</h2>

        <form action="../signup/signup.php">

			<div class="flex-container">   
				<div class = "account">   
					<p class="subtitle">Transaction history</p>
					    <ul> 
						   <li><a href="../home_page/home_page.php">Home page</a></li>
						   <li><a href="../send_money/send_money.php">Send money</a></li>
						   <li><a href="../transfer_money/transfer_money.php">Transfer between account</a></li>
						   <li><a href="../pay_bills/pay_bills.php">Pay bills</a></li>
						 </ul>

					<br>

					<table class="display_account"> Account
						<tr class="account_info">
							<td id="account_number">40023289</td>
							<td id="account_balance">CDN 9999</td>
						</tr>

						<tr>
						</tr>
					</table>

					<table class="credit_card_line">Credit Card
						<tr class="credit_info">
							<td id="credit_number">5004789</td>
							<td id="credit_balance">-150</td>
						</tr>
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
