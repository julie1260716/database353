<!DOCTYPE html>
<html>
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
    <head>
        <meta charset="utf-8">
        <title>Confirmation Page</title>
        <meta name="description" content="Comp 353 Confirmation Page">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
      <div id="container">
       <h1>BANK.</h1>
        <h2>Thank you for signing up!</h2>     
            <p class="subtitle">Your Client Card Number is #<?php echo $id ?></p> 
              <br>
               <div class="flex-container-signup">          
                <div>
                    <form>
                        <label class="confirm">First Name</label>       
                        <p><?php echo $fname ?></p>                   
                        <label  class="confirm">Date of Birth</label>    
                        <p><?php echo $dob ?></p>          
                        <label  class="confirm">Phone Number</label>     
                        <p><?php echo $phone ?></p>
                    </form>
                </div> 
                    <div>
                    <form>
                        <label  class="confirm">Last Name</label>       
                        <p><?php echo $lname ?></p>                  
                        <label  class="confirm">Email Address</label>    
                        <p><?php echo $email ?></p>       
                        <label  class="confirm">Address</label>          
                       <p><?php echo $add ?></p>    
                    </form>
                    </div>
            </div><!--end of flex-container-signup--> 
          
        <br><br>  
        <a href="login.php">GO TO LOGIN PAGE ></a>
                 
     </div><!--end of container div-->
        
    </body>
</html>
