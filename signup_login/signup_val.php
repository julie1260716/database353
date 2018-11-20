<?php
        //url variable
        $url = "http://localhost/353/confirmation.php";

        //defining the variables and setting to empty values
        //errors
        $fname_err = $lname_err = $dob_err = $phone_err = $email_err = $add_err = "";
        //variables
        $fname = $lname = $dob = $phone = $email = $add = "";
        //checks if everything is all validated
        $allClear = 0;
        $numFields = 6;

 if($_SERVER["REQUEST_METHOD"] == "POST") {
    
          //First name
          if(empty($_POST['first_name'])) $fname_err = "* Cannot leave field blank";
          // valid first name
          else if (!preg_match("/^[a-zA-Z ]*$/",$fname)) $fname_err = "First Name is invalid";
          else $allClear++; $fname = test_input($_POST['first_name']); 
          //Last name
          if(empty($_POST['last_name'])) $lname_err = "* Cannot leave field blank";
          // valid last name
          else if (!preg_match("/^[a-zA-Z ]*$/",$lname)) $lname_err = "Last Name is invalid";
          else $allClear++; $lname = test_input($_POST['last_name']); 
         //DOB
          if(empty($_POST['dob'])) $dob_err = "* Cannot leave field blank";
          //valid dob
          else if (!preg_match("/([012]?[1-9]|[12]0|3[01])\/(0?[1-9]|1[012])\/([0-9]{4})/",$_POST['dob'])) $dob_err = "Date of Birth is invalid (e.g. 12/01/1990)";
          else $allClear++;   $dob = test_input($_POST['dob']); 
          //Phone
          if(empty($_POST['phone'])) $phone_err = "* Cannot leave field blank";
          //valid phone number
          else if(!preg_match("/[0-9]{3}-[0-9]{3}-[0-9]{4}/",$_POST['phone'])) $phone_err = "Phone Number is invalid (e.g. 514-555-5555)";
          else $allClear++;   $phone = test_input($_POST['phone']);  
          //Email
          if(empty($_POST['email'])) $email_err = "* Cannot leave field blank";
          //valid e-mail
          else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $email_err = "Email is invalid (e.g. example@hotmail.com)";
          else $allClear++;   $email = test_input($_POST['email']);   
          //address
          if(empty($_POST['address'])) $add_err = "* Cannot leave field blank";
          else $allClear++; $add = test_input($_POST['address']);
          
            if($allClear == $numFields)
            {
                /******START SESSION + STORE VARIABLES******/
                doCookies();
                /******REDIRECT TO CONFIRMATION PAGE******/
                header("Location: $url");
                exit;
            }
          
      }

function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
   
            return $data;
       }

function doCookies() {
    //set variables for the cookies (set for 24 hours)
    setcookie("cli_num", 12345678912345, time() + (86400 * 1), "/");
    setcookie("cli_fname", $_POST['first_name'], time() + (86400 * 1), "/");
    setcookie("cli_lname", $_POST['last_name'], time() + (86400 * 1), "/");
    setcookie("cli_dob", $_POST['dob'], time() + (86400 * 1), "/");
    setcookie("cli_email", $_POST['email'], time() + (86400 * 1), "/");
    setcookie("cli_phone", $_POST['phone'], time() + (86400 * 1), "/");
    setcookie("cli_add", $_POST['address'], time() + (86400 * 1), "/");
    
   /* //print the cookies
    echo "Value is: " . $_COOKIE["cli_num"];
    echo "Value is: " . $_COOKIE["cli_fname"];
    echo "Value is: " . $_COOKIE["cli_lname"];
    echo "Value is: " . $_COOKIE["cli_dob"];
    echo "Value is: " . $_COOKIE["cli_email"];
    echo "Value is: " . $_COOKIE["cli_phone"];
    echo "Value is: " . $_COOKIE["cli_add"];*/
    
}

?>