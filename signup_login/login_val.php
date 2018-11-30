<?php
    //connect to db
    include("../db_connection.php");
    $url = "../home_page/home_page.php";
    $em_url = "../employee/index.php";
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
          else if (!is_numeric($_POST['cli_num'])) echo"* Card number must be a number ";
          else $cli_num = test_input($_POST['cli_num']);
          //Client Card Password
          if(empty($_POST['cli_pass'])) $cli_pass_err = "* Cannot leave field blank";
           else $cli_pass = test_input($_POST['cli_pass']);
            
            //FINDING CLIENT IN DATABASE
        $cli_num = $_POST['cli_num'];
        $isFound = findClient($db, $cli_num);
        
        if($isFound == true){
            /******REDIRECT TO HOME PAGE******/
          header("Location: $url");
          exit;
        }
        
        
        }
             
    }//end of client if form
    if(!empty($_POST['em_form'])){ //then we process we EMPLOYEE FORM
      if($_SERVER["REQUEST_METHOD"] == "POST") {
          //Employee Id
          if(empty($_POST['em_id'])) $em_id_err = "* Cannot leave field blank";
          else if (!is_numeric($_POST['em_id'])) echo"* Employee Id is invalid ";
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
    mysqli_query($db, $query) or die("Error with query");
    //Get Result set
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    if($row==null){
        echo"* Error, Client was not found!";
        return false;
    } 
    else {   
		if(strcasecmp($row['client_password'],$_POST['cli_pass'])!=0)
			 echo "* Error, the password is incorrect!";
		 else{
			 doCookies($row);
         //CLOSE CONNECTION
         mysqli_close($db);
         return true;
		 }
		 
         }
        
    } //end of findClient()
function findEmployee($db, $em_id){
    //Create SQL Query
    $query = "SELECT * FROM employee WHERE employee_id=$em_id";
    mysqli_query($db, $query) or die("Error with query");
    //Get Result set
    
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    if($row==null){
        echo"* Error, Employee was not found!";
        return false;
    }
        
     
    else {   
        
		 //check the password
		 if(strcasecmp($row['employee_password'],$_POST['em_pass'])!=0)
			 echo "* Error, the password is incorrect!";
		 else {
			 doEmCookies($row);
		 //CLOSE CONNECTION
         mysqli_close($db);
		 //return true
         return true;
		 }
		 
         }
        
    } //end of findClient()
function doCookies($row){
    setcookie("cli_id", $row['client_id'], time() + (86400 * 1), '/');
    setcookie("cli_fname", $row['client_first_name'], time() + (86400 * 1), '/');
  
}//end of doCookies()
function doEmCookies($row){
    setcookie("em_id", $row['employee_id'], time() + (86400 * 1), '/');
    setcookie("em_email", $row['employee_email'], time() + (86400 * 1), '/');
    setcookie("em_pass", $row['employee_password'], time() + (86400 * 1), '/');
    setcookie("em_name", $row['employee_name'], time() + (86400 * 1), '/');
    setcookie("em_title", $row['employee_title'], time() + (86400 * 1), '/');
    setcookie("em_add", $row['employee_address'], time() + (86400 * 1), '/');
    setcookie("em_date", $row['employee_start_date'], time() + (86400 * 1), '/');
    setcookie("em_phone", $row['employee_phone'], time() + (86400 * 1), '/');
    setcookie("em_branch_id", $row['employee_branch_id'], time() + (86400 * 1), '/');
    setcookie("em_level", $row['employee_level'], time() + (86400 * 1), '/');
    setcookie("em_payroll", $row['employee_payroll'], time() + (86400 * 1), '/');
    setcookie("em_sick_days", $row['employee_sick_days'], time() + (86400 * 1), '/');
    setcookie("em_holidays", $row['employee_holidays'], time() + (86400 * 1), '/');
}//end of doEmCookies()
?> 