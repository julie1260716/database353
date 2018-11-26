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

		$bills = array(
			"Electricity" => 300, 
			"Rent" => 700);
		$bill_list = "bills";
		$cookie_bills = serialize($bills);
		
		setcookie($acc_list, $cookie_acc, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($bill_list, $cookie_bills, time() + (86400 *30), "/");
	}
?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Pay bills</title>
        <meta name="description" content="Comp 353 Project">
        <link rel="stylesheet" href="main_stylesheet.css">
    </head>
    <body>
      <div id="container">
        <a href="../signup_login/login.php"><button type="submit" style="font-size: 16px; float:right; margin-right:20px;">Log out</button></a>
          <a href="../home_page/home_page.php"><button type="submit" style="font-size: 16px; float:right;">Homepage</button></a>        <h1>BANK.</h1>
        <h2>Welcome to Online Banking</h2>

        <form action="pay_bills_action.php" method="post">

			<div class="flex-container">   
				<div class = "account">   
					<p class="subtitle">Paying bills</p>
					    <ul> 
						   <li><a href="../home_page/home_page.php">Home page</a></li>
						   <li><a href="../send_money/send_money.php">Send money</a></li>
						   <li><a href="../transfer_money/transfer_money.php">Transfer money</a></li>
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

					<label> Bills </label>
					<?php
							$list_bill = unserialize($_COOKIE['bills']);
					?>

					<select name = "pay_bill"> 
						<?php foreach($list_bill as $key => $value) { ?>
							<option value="<?php echo $key ?>"><?php echo $key; echo " bills: ",$value; ?></option>
						<?php }?>
					</select>
				</div>

				<button type="submit" style="font-size: 16px">Confirm</button>
				<br><br>

				<button type="submit" style="font-size: 16px">Apply for new credit</button>
				<button type="submit" style="font-size: 16px" formaction="">Open new account</button>

		   </div><!--end of flex-container-->
    </form> 
       
     </div><!--end of container div-->
        
    </body>
</html>
