<!DOCTYPE html>
<html>   
    <head>
        <meta charset="utf-8">
        <title>Sign Up Page</title>
        <meta name="description" content="Comp 353 Project Sign Up page.">
         <?php include("signup_val.php");?>  
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
      <div id="container">
       <h1>BANK.</h1>
        <h2>Sign Up for Online Banking</h2>
          <p class="subtitle">Enter your information below</p>
            <div class="flex-container-signup">          
                <div>
                    <form action="<?= $_SERVER['PHP_SELF'] ?>"  method="post">
                        <label>First Name</label><br>  
                            <input type = "text" name = "first_name"/><br>
                                <!--will output the error here-->
                                    <span class = "error"><?php echo $fname_err; echo"<br>";?></span>
                        <label>Date of Birth (dd/mm/yyyy)</label><br>
                            <input type="text" name="dob"><br>
                               <!--will output the error here-->
                                    <span class = "error"><?php echo $dob_err; echo"<br>";?></span>
                        <label>Phone Number</label><br>
                            <input type="tel" name="phone"><br>
                                <!--will output the error here-->
                                  <span class = "error"><?php echo $phone_err; echo"<br>";?></span>  
<!--SUBMIT BUTTON IS HERE-->
                                 <br>
                                <button type="submit">SUBMIT</button>							  
							</div> 
							<div>
                        <label>Last Name</label><br>
                            <input type = "text" name = "last_name"/><br>
                                <!--will output the error here-->
                                  <span class = "error"><?php echo $lname_err; echo"<br>";?></span>
                        <label>Email Address</label><br>
                            <input type="text" name="email"><br>
                                <!--will output the error here-->
                                  <span class = "error"><?php echo $email_err; echo"<br>";?></span>
								  
						<label>Address</label><br>
                            <input type="text" name="address"><br>
                                <!--will output the error here-->
                                  <span class = "error"><?php echo $add_err; echo"<br>";?></span>
                    </form>
                </div>
            </div><!--end of flex-container-signup-->         
            
     </div><!--end of container div-->
        
    </body>
</html>
     