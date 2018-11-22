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

        <form class="add_customer_form" action="../signup/signup.php"> <!--action="send_funds_action.php?cust_id=<?php echo $id ?>" method="post">-->

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

					<label> From account <?php echo $row0["account_no"] ?> </label>
					<select>
						<option value="40023289">40023289</option>
						<option value="5004789">5004789</option>
					</select>

					<br>

			        <div class="flex-container">
			            <div class=container>
			                <label>Enter Amount:</label>
			                <input name="amt" min="0" max="1000" type="number" required />
			            </div>
			        </div>

					<br> 
					
					<div class="flex-container">
			            <div class=container>
			                <label>To Account No : <label id="info_label"><input name="act_to" maxlength="9" type="text" required /></label></label>
			            </div>
			        </div>

					<br>
					<button type="submit" style="font-size: 16px">Confirm</button>
				</div>
		   </div><!--end of flex-container-->
    </form> 
       
     </div><!--end of container div-->
        
    </body>
</html>
