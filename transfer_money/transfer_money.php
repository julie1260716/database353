<?php
	if(count($_COOKIE) > 0) {
	    setcookie("user", "", time() - 3600);
	    setcookie("accounts", "", time() - 3600);
	    $cookie_account = unserialize($_COOKIE['accounts']);
	}
	else {
		$cookie_account = array(
			40023289 => 5000,
			50023289 => 500,
			997789 => 1000);

		$acc_list = "accounts";
		$cookie_acc = serialize($cookie_account);

		setcookie($acc_list, $cookie_acc, time() + (86400 * 30), "/"); // 86400 = 1 day
	}
?>
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
         <a href="../signup_login/login.php"><button type="submit" style="font-size: 16px; float:right; margin-right:20px;">Log out</button></a>
          <a href="../home_page/home_page.php"><button type="submit" style="font-size: 16px; float:right;">Homepage</button></a>
        <h1>BANK.</h1>
        <h2>Welcome to Online Banking</h2>

        <form class="add_customer_form" action="transfer_action.php" method="post">

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
					<br>

					<!--Load all account of users -->
					<label> From account </label>
					<?php
							$list_acc = $cookie_account ;
					?> 
					<select name = "sender">
						<?php foreach($list_acc as $key => $value) { ?>
							<option value="<?php echo $key ?>"><?php echo $key ?></option>
						<?php }?>
					</select>
					<br>
			        <div class="flex-container">
			            <div class=container>
			                <label>Enter Amount:</label>
			                <input name="amt" min="0" max="1000" type="number" required />
			            </div>
			        </div>
					
					<div class="flex-container">
			            <div class=container>	          
			                <label>To Account No</label>
				                <?php
									$list_acc = $cookie_account;
								?> 
							<select name = "receiver">
								<?php foreach($list_acc as $key => $value) { ?>
									<option value="<?php echo $key ?>"><?php echo $key ?></option>
								<?php }?>
							</select>
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
