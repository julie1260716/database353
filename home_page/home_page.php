<?php
	if(isset($_COOKIE["cli_num"]))
    	$id = $_COOKIE["cli_num"];
    if(isset($_COOKIE["cli_fname"]))
    	$fname = $_COOKIE["cli_fname"];
    if(isset($_COOKIE["cli_lname"]))
        $lname = $_COOKIE["cli_lname"];
    if(isset($_COOKIE["cli_dob"]))
        $dob = $_COOKIE["cli_dob"];
    if(isset($_COOKIE["cli_email"]))
            $phone = $_COOKIE["cli_email"];
    if(isset($_COOKIE["cli_phone"]))
        $email = $_COOKIE["cli_phone"];
	if(isset($_COOKIE["cli_add"]))
	    $add = $_COOKIE["cli_add"];  

	if(count($_COOKIE) > 0) {
	    setcookie("user", "", time() - 3600);
	    setcookie("accounts", "", time() - 3600);
	    $cookie_account = unserialize($_COOKIE['accounts']);
	}
	else {
		$cookie_name = "user";
		$cookie_value = "John Doe";
		$cookie_account = array(
			40023289 => 5000,
			50023289 => 500,
			997789 => 1000);

		$acc_list = "accounts";
		$cookie_acc = serialize($cookie_account);

		$cookie_receive = array(
			12345 => 500,
			778899 => 10000);
		$acc_rec_list = "acc_rec_list";
		$rec_list = serialize($cookie_receive);

		$bills = array(
			"Electricity" => 300, 
			"Rent" => 700);
		$bill_list = "bills";
		$cookie_bills = serialize($bills);

		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($acc_list, $cookie_acc, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie($bill_list, $cookie_bills, time() + (86400 *30), "/");
		setcookie($acc_rec_list, $rec_list, time() + (86400 * 30), "/"); // 86400 = 1 day
	}

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

        <form action="../signup/signup.php">

			<div class="flex-container">   
				<div class = "account">   
					<p class="subtitle">Hello <?php echo $fname ?></p>
					    <ul> 
						   <li><a href="../send_money/send_money.php">Send money</a></li>
						   <li><a href="../transfer_money/transfer_money.php">Transfer money</a></li>
						   <li><a href="../pay_bills/pay_bills.php">Pay bills</a></li>
						   <li><a href="../transaction_history/transaction_history.php">Transaction history</a></li>
						 </ul>

					<br> 
		            <br>
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
					<button type="submit" style="font-size: 16px" formaction="../apply_credit/apply_credit.php">Apply for new credit</button>
					<button type="submit" style="font-size: 16px" formaction="../open_account/open_account.php">Open new account</button>
				</div>
		   </div><!--end of flex-container-->
    </form> 
       
     </div><!--end of container div-->
        
    </body>
</html>
