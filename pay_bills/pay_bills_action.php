<?php
	$cookie_name = "user";
	$cookie_value = "John Doe";
	$cookie_account = array(40023289,50023289);
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
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