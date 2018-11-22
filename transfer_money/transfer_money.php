<?php
	if(count($_COOKIE) > 0) {
	    setcookie("user", "", time() - 3600);
	    setcookie("accounts", "", time() - 3600);
	}

	$cookie_name = "user";
	$cookie_value = "John Doe";
	$cookie_account = array(
		40023289 => 5000,
		50023289 => 500,
		997789 => 1000);
	$acc_list = "accounts";


	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	setcookie($acc_list, serialize($cookie_account), time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Transfer money</title>
        <meta name="description" content="Comp 353 Project">
        <link rel="stylesheet" href="main_stylesheet.css">

        <!-- php transfer money file -->
        <?php include("transfer_action.php");?>  
    </head>
    <body>
      <div id="container">
        <h1>BANK.</h1>
        <h2>Welcome to Online Banking</h2>

        <form class="add_customer_form" action="transfer_action.php?cookie_account=<?php echo $cookie_account ?>" method="post">

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

					<!--Load all account of users -->
					<label> From account </label>
					<?php
							$list_acc = unserialize($_COOKIE[$acc_list]);
					?> 
					<select name = "Sender">
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
									$list_acc = unserialize($_COOKIE[$acc_list]);
								?> 

							<select name = "Receiver">
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
