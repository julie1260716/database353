<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <title>Home Page</title>
        <meta name="description" content="Comp 353 Project Homepage.">
         <!--LINK TO PHP VALIDATION FILE-->
         <?php include("login_val.php");?>  
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
      <div id="container">
        <h1>BANK.</h1>
        <h2>Sign in to Online Banking</h2>
    <div class="flex-container">      
        <div>    
            <form method="post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <p class="subtitle">CLIENTS</p>    
                  <label>Client Card Number</label>  
                    <input type = "text" name = "cli_num"/>
                       <!--will output the error here-->
                        <span class = "error"><?php echo"<br>"; echo $cli_num_err;?></span>
             <br>
             <label>Password</label><br> 
                <input type = "password" name = "cli_pass" />
<!--CLI BUTTON-->
                <span class = "error"><input type="submit" name="client_form" value="LOGIN"/></span>
                  <!--will output the error here-->
                    <span class = "error"><?php  echo"<br>"; echo $cli_pass_err;?></span>
                
            </form>
        </div>
          
          <div>    
            <form method="post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <p class="subtitle">EMPLOYEES</p>  
                  <label>Employee ID Number</label>  
                    <input type = "text" name = "em_id"/>
                      <!--will output the error here-->
                        <span class = "error"><?php echo"<br>"; echo $em_id_err;?></span>
             <br>
             <label>Password</label><br> 
                <input type = "password" name = "em_pass" />
<!--EM BUTTON --> 
                <span class = "button"><input type="submit" name="em_form" value="LOGIN"/></span>
                  <!--will output the error here-->
                    <span class = "error"><?php echo"<br>"; echo $em_pass_err;?></span>
                
            
            </form>
        </div>
   </div><!--end of flex-container-->
          
       <br>
	   <br>
	   <br>
        <a href="signup.php">SIGN UP FOR ONLINE BANKING ></a>
        <br>    
     </div><!--end of container div-->
        
    </body>
</html>
