<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Hire Staff</title>
        <meta name="description" content="Comp 353 Project Sign Up page.">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        
<?php
      //defining the variables and setting to empty values
      //errors
      $fname_err = $lname_err = $dob_err = $phone_err = $email_err = $add_err = "";
      //variables
      $fname = $lname = $dob = $phone = $email = $add = "";
        
      if($_SERVER["REQUEST_METHOD"] == "POST") {
          //First name
          if(empty($_POST['first_name'])) $fname_err = "* Cannot leave field blank";
           else $fname = test_input($_POST['first_name']);
          //Last name
          if(empty($_POST['last_name'])) $lname_err = "* Cannot leave field blank";
           else $lname = test_input($_POST['last_name']);
          //DOB
          if(empty($_POST['dob'])) $dob_err = "* Cannot leave field blank";
           else $dob = test_input($_POST['dob']);
          //Phone
          if(empty($_POST['phone'])) $phone_err = "* Cannot leave field blank";
           else $phone = test_input($_POST['phone']);
          //Email
          if(empty($_POST['email'])) $email_err = "* Cannot leave field blank";
           else $email = test_input($_POST['email']);
          //address
          if(empty($_POST['address'])) $add_err = "* Cannot leave field blank";
           else $add = test_input($_POST['address']);
           //branch
          if(empty($_POST['branch'])) $add_err = "* Cannot leave field blank";
           else $add = test_input($_POST['branch']);
           //payroll
          if(empty($_POST['payroll'])) $add_err = "* Cannot leave field blank";
           else $add = test_input($_POST['payroll']);
          
      }
        
       function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
       }
?>    
      <div id="container">
          <a href="../signup_login/login.php"><button type="submit" style="font-size: 16px; float:right; margin-right:20px;">Log out</button></a>
          <a href="../employee_home_page/employee_home_page.php"><button type="submit" style="font-size: 16px; float:right;">Homepage</button></a>
       <h1>BANK.</h1>
        <h2>Add new staff to Online Banking</h2>     
          <p class="subtitle">Enter information below</p>
            <ul> 
              <li><a href="../employee_home_page/employee_home_page.php">Home employee page</a></li>
              <li><a href="../fire_employee/fire_employee.php">Fire employee</a></li>
              <li><a href="../close_client_account/close_client_account.php">Close client account</a></li>
              <li><a href="../terminate_client/terminate_client.php">Terminate Client</a></li>
            </ul>
            <br><br>
            <div class="flex-container-signup">  
                <div>
                    <form method="post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <label>First Name</label><br>  
                            <input type = "text" name = "first_name"/><br>
                                <!--will output the error here-->
                                    <span class = "error"><?php echo $fname_err; echo"<br>";?></span>

                        <label>Title</label><br>
                            <input type="text" name="tittle"><br>
                                <!--will output the error here-->
                                  <span class = "error"><?php echo $add_err; echo"<br>";?></span>

                        <label>Date of Birth (dd/mm/yyyy)</label><br>
                            <input type="text" name="dob"><br>
                               <!--will output the error here-->
                                    <span class = "error"><?php echo $dob_err; echo"<br>";?></span>

                        <label>Phone Number</label><br>
                            <input type="text" name="phone"><br>
                                <!--will output the error here-->
                                  <span class = "error"><?php echo $phone_err; echo"<br>";?></span>  

                        <label>Branch</label><br>
                            <input type="text" name="branch"><br>
                                <!--will output the error here-->
                                  <span class = "error"><?php echo $add_err; echo"<br>";?></span>

                                 <br>
                                 <button type="submit">SIGN UP</button>									  
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

						            <label>Payroll</label><br>
                            <input type="text" name="payroll"><br>
                                <!--will output the error here-->
                                  <span class = "error"><?php echo $add_err; echo"<br>";?></span>

                        <label>Start date (dd/mm/yyyy)</label><br>
                            <input type="text" name="start_date"><br>
                                <!--will output the error here-->
                                  <span class = "error"><?php echo $add_err; echo"<br>";?></span>

                    </form>
                </div>
            </div><!--end of flex-container-signup-->         
            
     </div><!--end of container div-->
        
    </body>
</html>
     