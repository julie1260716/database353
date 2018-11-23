<?php
	$cookie_account = unserialize($_COOKIE['accounts']);
	$transaction_history = unserialize($_COOKIE['transaction']);

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
?>

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
         <a href="../signup_login/login.php"><button type="submit" style="font-size: 16px; float:right; margin-right:20px;">Log out</button></a>
          <a href="../home_page/home_page.php"><button type="submit" style="font-size: 16px; float:right;">Homepage</button></a>
        <h1>BANK.</h1>
        <h2>Welcome to Online Banking</h2>

        <form class="add_customer_form" action="transaction_action.php" method="post">

			<div class="flex-container">   
				<div class = "account">   
					<p class="subtitle">Transaction history</p>
					    <ul> 
						   <li><a href="../home_page/home_page.php">Home page</a></li>
						   <li><a href="../send_money/send_money.php">Send money</a></li>
						   <li><a href="../transfer_money/transfer_money.php">Transfer money</a></li>
						   <li><a href="../pay_bills/pay_bills.php">Pay bills</a></li>
						 </ul>
					<br>

					<label> Choose account </label>
					<?php
							$list_acc = $cookie_account;
					?> 
					<select name = "chosen_acc">
						<?php foreach($list_acc as $key => $value) { ?>
							<option value="<?php echo $key ?>"><?php echo $key ?></option>
						<?php }?>
					</select>

					<button type="submit" style="font-size: 16px">Confirm</button>

					<br><br>

					<table>
						<tr>
						   <td>Type</td>
				           <td>Account</td>
				           <td>Receiver</td>
				           <td>Amount</td>
				           <td>Date</td>
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
