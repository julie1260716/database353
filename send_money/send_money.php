<?php
	if(count($_COOKIE) > 0) {
	    setcookie("user", "", time() - 3600);
	    setcookie("accounts", "", time() - 3600);
	}
	$cookie_name = "user";
	$cookie_value = "John Doe";
	$cookie_account = array(40023289,50023289,997789);
	$acc_list = "accounts";
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	setcookie($acc_list, serialize($cookie_account), time() + (86400 * 30), "/"); // 86400 = 1 day
?>
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
        <a href="../signup_login/login.php"><button type="submit" style="font-size: 16px; float:right; margin-right:20px;">Log out</button></a>
        <a href="../home_page/home_page.php"><button type="submit" style="font-size: 16px; float:right;">Homepage</button></a>
        <h1>BANK.</h1>
        <h2>Welcome to Online Banking</h2>

        <form action="send_action.php" method="post">

			<div class="flex-container">   
				<div class = "account">   
					<p class="subtitle">Sending money</p>
					    <ul> 
						   <li><a href="../home_page/home_page.php">Home page</a></li>
						   <li><a href="../transfer_money/transfer_money.php">Transfer money</a></li>
						   <li><a href="../pay_bills/pay_bills.php">Pay bills</a></li>
						   <li><a href="../transaction_history/transaction_history.php">Transaction history</a></li>
						 </ul>
					<br>

					<label> Account </label>
					<?php
							$list_acc = $cookie_account;
					?> 

					<select name = "sender">
						<?php foreach($list_acc as $key => $value) { ?>
							<option value="<?php echo $key ?>"><?php echo $key ?></option>
						<?php }?>
					</select>
					<br>

			        <div class="flex-container">
			            <div class=container>
			                <label>To Account No : <label id="info_label"><input name="send_to" maxlength="9" type="text" required /></label></label>
			            </div>
			        </div>

			        <div class="flex-container">
			            <div class=container>
			                <label>Enter Amount:</label><br>
			                <input name="amt" min="0" max="1000" type="number" required />
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
