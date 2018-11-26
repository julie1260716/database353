<?php

session_status();

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "353p";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed " . $conn->connect_error);
}

//$id = null;
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
//
$sql = "INSERT INTO EMPLOYEE (employee_email,employee_password,employee_name,employee_title,employee_address,employee_start_date,employee_phone,employee_branch_id,employee_sick_days,employee_holidays,employee_payroll,employee_level) VALUES('$email', '$password', '$name', '$title', '$address', '$start_date', '$telephone', '$branch_id', '$sick_days', '$holiday', '$payroll', '$level')";
if ($conn->query($sql) === TRUE) {
    echo "New record added";
    header("Location: all_employees.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>