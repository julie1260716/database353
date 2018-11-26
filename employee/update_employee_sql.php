<?php
/**
 * Created by PhpStorm.
 * User: DONGZHANG
 * Date: 2018-11-23
 * Time: 8:46 PM
 */


$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "353p";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed " . $conn->connect_error);
}

$id = $_POST['id'];
$name = ($_POST["name"]);
$title = ($_POST["title"]);
$email = ($_POST["email"]);
$payroll = ($_POST["payroll"]);
$branch_id = ($_POST["branch_id"]);
$level = ($_POST["level"]);
$address = ($_POST["address"]);
$password = ($_POST["password"]);
$telephone = ($_POST["telephone"]);
$start_date = ($_POST["start_date"]);
$sick_days = ($_POST["sick_days"]);
$holiday = ($_POST["holiday"]);

$sql = "UPDATE EMPLOYEE SET employee_name='$name', employee_title='$title', 
employee_email='$email',employee_payroll='$payroll', employee_branch_id='$branch_id', 
employee_level='$level', employee_address='$address',employee_password='$password', 
employee_phone='$telephone', employee_sick_days='$sick_days',employee_holidays='$holiday'
WHERE employee_id='$id'";

$result = mysqli_query($conn, $sql);
if ($conn->query($sql) === TRUE) {
    echo "The employee $name is updated";
    header("Location: all_employees.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>


