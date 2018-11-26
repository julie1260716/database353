<?php
	if ($msg == 'Success!') {
        $mydate=getdate(date("U"));
        $transaction_date_array = array(
            'weekday' => $mydate['wday'],
            'day' => $mydate['mday'],
            'month' => $mydate['mon'],
            'year' => $mydate['year']);
        $transaction_name = 'transaction';
        $transaction_info = array(
            'type' => 'transfer',
            'sender' => $sender,
            'receiver' => $receiver,
            'amount' => $amount,
            'date' => $transaction_date_array);
        $transaction_list = serialize($transaction_info);
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
        <h2>Confirm sending money</h2>     
            <p class="subtitle">Your Client Card Number is #<?php echo $id ?></p> 
              <br>
               <div class="flex-container">   
                    <form>
                        <h3 style="color: red;"> <?php echo $msg ?> </h3>
                        <label class="confirm">First Name</label>       
                        <p><?php echo $fname ?></p>         
                        <label  class="confirm">Sender</label>     
                        <p><?php echo $sender ?></p>          
                        <label  class="confirm">Amount Transfer</label>    
                        <p><?php echo $amount ?></p>          
                        <label  class="confirm">Receiver</label>     
                        <p><?php echo $receiver ?></p>
                    </form>
                </div><!--end of flex-container--> 
          
        <br><br>  
                 
     </div><!--end of container div-->
        
    </body>
</html>