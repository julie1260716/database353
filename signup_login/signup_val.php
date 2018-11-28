<?php
        //url variable
        $url = "../signup_login/confirmation.php";
        //db connection
        include("../db_connection.php");
        //defining the variables and setting to empty values
        //errors
        $fname_err = $lname_err = $dob_err = $phone_err = $email_err = $add_err = $pass_err= "";
        //variables
        $fname = $lname = $dob = $phone = $email = $add = $password = "";
        //checks if everything is all validated
        $allClear = 0;
        $numFields = 7;

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
          //valid dob[012]?
          else if (!preg_match("/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/",$_POST['dob'])) $dob_err = "Date of Birth is invalid (e.g. 1990-01-12)";
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
          //password
          if(empty($_POST['password'])) $pass_err = "* Cannot leave field blank";
          else $allClear++; $password = test_input($_POST['password']);
     
          
            if($allClear == $numFields)
            {
                /******INSERT INTO THE DATABASE******/
                insertClient($db);
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

function insertClient($db) {
    $maxId = getMaxId($db) + 1;
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $bday = $_POST['dob'];
    $join = date("Y-m-d");
    $add = $_POST['address'];
    $phone = $_POST['phone'];
    
    
    $query = "insert into CLIENT (client_id, client_email, client_password, client_first_name, client_last_name, client_birthday, client_joining_date, client_address, client_phone, client_branch_id) values ($maxId, '$email', '$pass', '$fname', '$lname', '$bday', '$join', '$add', '$phone',2)"; 
    
     mysqli_query($db, $query) or die("Error with query");
    
     //set variables for the cookies (set for 24 hours)
    setcookie("cli_num", $maxId, time() + (86400 * 1), "/");
    setcookie("cli_fname", $fname, time() + (86400 * 1), "/");
    setcookie("cli_lname", $lname, time() + (86400 * 1), "/");
    setcookie("cli_dob", $bday, time() + (86400 * 1), "/");
    setcookie("cli_email", $email, time() + (86400 * 1), "/");
    setcookie("cli_phone", $phone, time() + (86400 * 1), "/");
    setcookie("cli_add", $add, time() + (86400 * 1), "/");
    setcookie("cli_pass", $pass, time() + (86400 * 1), "/");
    
   
}

function getMaxId($db){
    $query = "SELECT MAX(client_id) FROM client";
    mysqli_query($db, $query) or die("Error with query");
    //Get Result set
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    echo $row['MAX(client_id)'];
    
    return $row['MAX(client_id)'];
}


?>