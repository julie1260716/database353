<?php
    //defining the variables and setting to empty values
    //errors
    $cli_num_err = $cli_pass_err = $em_id_err = $em_pass_err = "";
    //variables
    $cli_num = $cli_pass = $em_id = $em_pass = "";

    if(!empty($_POST['client_form'])) { //then we process we CLIENT FORM
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
          //Client Card Number
          if(empty($_POST['cli_num'])) $cli_num_err = "* Cannot leave field blank";
          else if (!preg_match("/[0-9]{9}/",$_POST['cli_num'])) $cli_num_err = "* Card number is invalid (e.g. 123456789)";
          else $cli_num = test_input($_POST['cli_num']);
          //Client Card Password
          if(empty($_POST['cli_pass'])) $cli_pass_err = "* Cannot leave field blank";
           else $cli_pass = test_input($_POST['cli_pass']);
        }
    }//end of client if form


    if(!empty($_POST['em_form'])){ //then we process we CLIENT FORM

      if($_SERVER["REQUEST_METHOD"] == "POST") {
          //Employee Id
          if(empty($_POST['em_id'])) $em_id_err = "* Cannot leave field blank";
          else if (!preg_match("/^[0-9]/",$_POST['em_id'])) $em_id_err = "* Employee Id is invalid";
          else $em_id = test_input($_POST['em_id']);
          //Employee password
          if(empty($_POST['em_pass'])) $em_pass_err = "* Cannot leave field blank";
           else $em_pass = test_input($_POST['em_pass']);    
      }
    }//end of employee if form


    //TAKE LAST ID OF TRANSACTION TABLE
    // $conn = new mysqli($servername, $username, $password, $dbname);
    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    // $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('John', 'Doe', 'john@example.com')";

    // if ($conn->query($sql) === TRUE) {
    //     $last_id = $conn->insert_id;
    //     echo "New record created successfully. Last inserted ID is: " . $last_id;
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    // $conn->close();

    //STORE IN COOKIE

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?> 