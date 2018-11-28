<?php
    //connect to db
    include("../db_connection.php");
    $url = "../home_page/home_page.php";
    $em_url = "../employee_home_page/employee_home_page.php";
    //defining the variables and setting to empty values
    //errors
    $cli_num_err = $cli_pass_err = $em_id_err = $em_pass_err = "";
    //variables
    $cli_num = $cli_pass = $em_id = $em_pass = "";

    if(!empty($_POST['client_form'])) { //then we process we CLIENT FORM
        
        //INPUT VALIDATION
        if($_SERVER["REQUEST_METHOD"] == "POST") {
          //Client Card Number
          if(empty($_POST['cli_num'])) $cli_num_err = "* Cannot leave field blank";
          else if (!preg_match("/^[0-9]/",$_POST['cli_num'])) $cli_num_err = "* Card number must be a number";
          else $cli_num = test_input($_POST['cli_num']);
          //Client Card Password
          if(empty($_POST['cli_pass'])) $cli_pass_err = "* Cannot leave field blank";
           else $cli_pass = test_input($_POST['cli_pass']);
        }
        
        //FINDING CLIENT IN DATABASE
        $cli_num = $_POST['cli_num'];
        $isFound = findClient($db, $cli_num);
        
        if($isFound == true){
            /******REDIRECT TO HOME PAGE******/
          header("Location: $url");
          exit;
        }
             
    }//end of client if form


    if(!empty($_POST['em_form'])){ //then we process we EMPLOYEE FORM

      if($_SERVER["REQUEST_METHOD"] == "POST") {
          //Employee Id
          if(empty($_POST['em_id'])) $em_id_err = "* Cannot leave field blank";
          else if (!preg_match("/^[0-9]/",$_POST['em_id'])) $em_id_err = "* Employee Id is invalid";
          else $em_id = test_input($_POST['em_id']);
          //Employee password
          if(empty($_POST['em_pass'])) $em_pass_err = "* Cannot leave field blank";
           else $em_pass = test_input($_POST['em_pass']);  
          
          
           //FINDING EMPLOYEE IN DATABASE
        $em_id = $_POST['em_id'];
        $isFound = findEmployee($db, $em_id);
        
        if($isFound == true){
            /******REDIRECT TO CONFIRMATION PAGE******/
            header("Location: $em_url");
            exit;
        }
      }
    }//end of employee if form

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function findClient($db,$id){
    //Create SQL Query
    //$query = "SELECT * FROM client WHERE client_id=2;";
    $query = "SELECT * FROM client WHERE client_id=$id";
    mysqli_query($db, $query) or die("Errossr with querysss");
    //Get Result set
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    if($row==null){
        echo"* Error, Client was not found!";
        return false;
    } 
    else {   
      
        doCookies($row);
         //CLOSE CONNECTION
         mysqli_close($db);
         //if the client is FOUND, return TRUE
         return true;
         }
        
    } //end of findClient()

function findEmployee($db, $em_id){
    //Create SQL Query
    $query = "select * from emloyee where employee_id=$em_id";
    mysqli_query($db, $query) or die("Errorss with query");
    //Get Result set
    
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);

    if($row==null){
        echo"* Error, Employee was not found!";
        return false;
    }
        
     
    else {   
        doEmCookies($row);
         //CLOSE CONNECTION
         mysqli_close($db);
         //if the client is FOUND, return TRUE
         return true;
         }
        
    } //end of findClient()

function doCookies($row){
    setcookie("cli_id", $row['employee_id'], time() + (86400 * 1), '/');
    setcookie("cli_fname", $row['client_first_name'], time() + (86400 * 1), '/');
   /* setcookie("cli_email", $row['client_email'], time() + (86400 * 1), "/");
    setcookie("cli_pass", $row['client_password'], time() + (86400 * 1), "/");
   
    setcookie("cli_lname", $row['client_last_name'], time() + (86400 * 1), "/");
    setcookie("cli_bday", $row['client_birthday'], time() + (86400 * 1), "/");
    setcookie("cli_join_date", $row['client_joining_date'], time() + (86400 * 1), "/");
    setcookie("cli_add", $row['client_address'], time() + (86400 * 1), "/");
    setcookie("cli_phone", $row['client_phone'], time() + (86400 * 1), "/");
    setcookie("cli_branch_id", $row['client_branch_id'], time() + (86400 * 1), "/");*/
}//end of doCookies()

function doEmCookies($row){
    setcookie("em_id", $row['client_id'], time() + (86400 * 1), '/');
}//end of doEmCookies()

?> 
