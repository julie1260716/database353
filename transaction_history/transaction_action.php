<?php
	$cookie_account = unserialize($_COOKIE['accounts']);
	$transaction_history = unserialize($_COOKIE['transaction']);

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$chosen_acc = $_POST['chosen_acc'];
	}

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

function translate_day($day){
	$value = '';

	if ($day = 2)
		$value = 'Monday';
	if ($day = 3)
		$value = 'Tuesday';
	if ($day = 4)
		$value = 'Wednesday';
	if ($day = 5)
		$value = 'Thrusday';
	if ($day = 6)
		$value = 'Friday';
	if ($day = 7)
		$value = 'Saturday';
	if ($day = 8)
		$value = 'Sunday';

	return $value;
}

function translate_month($num){
	$value = '';

	if ($num = 1)
		$value = 'January';
	if ($num = 2)
		$value = 'February';
	if ($num = 3)
		$value = 'March';
	if ($num = 4)
		$value = 'April';
	if ($num = 5)
		$value = 'May';
	if ($num = 6)
		$value = 'June';
	if ($num = 7)
		$value = 'July';
	if ($num = 8)
		$value = 'August';
	if ($num = 9)
		$value = 'September';
	if ($num = 10)
		$value = 'October';
	if ($num = 11)
		$value = 'November';
	if ($num = 12)
		$value = 'December';

	return $value;
}
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

        <form action="../signup/signup.php">

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

					<label> Choosen account </label>
					<?php
						echo $chosen_acc;
					?> 
					<br>

					<table>
						<tr>
						   <td>Type</td>
				           <td>Account</td>
				           <td>Receiver</td>
				           <td>Amount</td>
				           <td>Date</td>
				        </tr>

						<?php for ($x = 0; $x < sizeof($transaction_history); $x = $x + 5) { ?>
									<?php if (($transaction_history['sender'] == $chosen_acc) or ($transaction_history['receiver'] == $chosen_acc)) { ?>

							        <tr>
							           <td><?php echo $transaction_history['type'] ?></td>
							           <td><?php echo $transaction_history['sender'] ?></td>
							           <td><?php echo $transaction_history['receiver'] ?></td>
							           <td><?php echo $transaction_history['amount'] ?></td>

							           <td><?php $mydate = $transaction_history['date']; $day = translate_day($mydate['weekday']); ?>
							           <?php $month = translate_month($mydate['month']) ; echo "$day, $mydate[day] $month, $mydate[year]"; ?>
							           	
							           </td>
							        </tr>

							       	<?php } ?>

							    <?php
							}
						?>
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
