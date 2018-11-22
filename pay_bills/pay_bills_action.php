<?php
	$cookie_account = unserialize($_COOKIE['accounts']);
	$cookie_rec = unserialize($_COOKIE['bills']);

    if($_SERVER["REQUEST_METHOD"] == "POST") {
    	$sender = $_POST['sender'];
    	$receiver = $_POST['pay_bill'];
    	$amount = 0;

    	foreach ($cookie_rec as $key => $value) {
    		if ($key == $receiver){
    			$amount = $value;
    			$value = 0;
    		}

    		$cookie_rec[$key] = $value;
    	}

    	foreach ($cookie_account as $key => $value) {
    		if ($key == $sender)
    			$value = $value - $amount;

    		$cookie_account[$key] = $value;
    	}

    	setcookie('accounts', serialize($cookie_account), time() + (86400 * 30), "/"); // 86400 = 1 day
    	setcookie('bills', serialize($cookie_rec), time() + (86400 * 30), "/"); // 86400 = 1 day
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

?>

<?php
/*****GETTING COOKIE VALUES*****/
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
        <title>Confirmation Page</title>
        <meta name="description" content="Comp 353 Confirmation Page">
        <link rel="stylesheet" href="main_stylesheet.css">
    </head>
    <body>
   
    <div id="container">
        <a href="../signup_login/login.php"><button type="submit" style="font-size: 16px; float:right; margin-right:20px;">Log out</button></a>
    	<a href="../home_page/home_page.php"><button type="submit" style="font-size: 16px; float:right;">Homepage</button></a>

       <h1>BANK.</h1>
        <h2>Confirm transfer between account</h2>     
            <p class="subtitle">Your Client Card Number is #<?php echo $id ?></p> 
              <br>
               <div class="flex-container">   
                    <form>
                        <label class="confirm">First Name</label>       
                        <p><?php echo $fname ?></p>         
                        <label  class="confirm">Sender</label>     
                        <p><?php echo $sender ?></p>          

                        <label class="confirm">Account balance</label>
                        <p><?php echo $cookie_account[$sender] ?></p>

                        <label  class="confirm">Amount paid</label>    
                        <p><?php echo $amount ?></p>          
                        <label  class="confirm">Receiver</label>     
                        <p><?php echo $receiver ?></p>
                    </form>
            	</div><!--end of flex-container--> 
          
        <br><br>  
                 
     </div><!--end of container div-->
        
    </body>
</html>