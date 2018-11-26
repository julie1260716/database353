<?php
	if(isset($_COOKIE["cli_fname"]))
    	$cli_fname = $_COOKIE["cli_fname"];
	
?>


<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Home Page</title>
        <meta name="description" content="Comp 353 Project">
        <link rel="stylesheet" href="main_stylesheet.css">
    </head>
    <body>
      <div id="container">
        <a href="../signup_login/login.php"><button type="submit" style="font-size: 16px; float:right; margin-right:20px;">Log out</button></a>
        <h1>BANK.</h1>
        <h2>Welcome to Online Banking</h2>

        <form>

			<div class="flex-container">   
				<div class = "account">   
					<p class="subtitle">Hello <?php echo $cli_fname; ?></p>
					    <ul> 
						   <li><a href="../send_money/send_money.php">Send money</a></li>
						   <li><a href="../transfer_money/transfer_money.php">Transfer money</a></li>
						   <li><a href="../pay_bills/pay_bills.php">Pay bills</a></li>
						   <li><a href="../transaction_history/transaction_history.php">Transaction history</a></li>
						 </ul>

					<br> 
		            <br>
					<br>

					<label>Account</label>
					<table class="display_account"> 
						<?php foreach ($cookie_account as $key => $value) { ?>
					        <tr>
					           <td><?php echo $key ?></td>
					           <td><?php echo $value ?></td>
					        </tr>
					</table>

					<label>Credit card</label>
					<table class="credit_card_line">
						<?php foreach ($cookie_account as $key => $value) { ?>
					        <tr>
					           <td><?php echo $key ?></td>
					           <td><?php echo $value ?></td>
					        </tr>
					</table>

					<br>
					<button type="submit" style="font-size: 16px" formaction="../apply_credit/apply_credit.php">Apply for new credit</button>
					<button type="submit" style="font-size: 16px" formaction="../open_account/open_account.php">Open new account</button>
				</div>
		   </div><!--end of flex-container-->
    </form> 
       
     </div><!--end of container div-->
        
    </body>
</html>
