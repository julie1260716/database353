<?php
      //defining the variables and setting to empty values
      //errors
      $cli_num_err = $cli_pass_err = $em_id_err = $em_pass_err = "";
      //variables
      $cli_num = $cli_pass = $em_id = $em_pass = "";
        
      if($_SERVER["REQUEST_METHOD"] == "POST") {
          //Client Card Number
          if(empty($_POST['cli_num'])) $cli_num_err = "* Cannot leave field blank";
          else if (!preg_match("/[0-9]{14}/",$_POST['cli_num'])) $cli_num_err = "Card number is invalid (e.g. 12345678912456)";
          else $cli_num = test_input($_POST['cli_num']);
          //Client Card Password
          if(empty($_POST['cli_pass'])) $cli_pass_err = "* Cannot leave field blank";
           else $cli_pass = test_input($_POST['cli_pass']);
          //Employee Id
          if(empty($_POST['em_id'])) $dob_err = "* Cannot leave field blank";
          else if (!preg_match("/[^0-9]{1,}/",$_POST['em_id'])) $cli_num_err = "Employee Id is invalid";
          else $em_id = test_input($_POST['em_id']);
          //Employee password
          if(empty($_POST['em_pass'])) $phone_err = "* Cannot leave field blank";
           else $em_pass = test_input($_POST['em_pass']);    
      }
        
       function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
       }
?> 