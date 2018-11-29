<?php

session_status();

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "353s";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed " . $conn->connect_error);
}

//$id = null;
$name = ($_POST["name"]);
//
$sql = "INSERT INTO BRANCH_CITY (branch_city) VALUES('$name')";
if ($conn->query($sql) === TRUE) {
    echo "New record added";
    header("Location: all_cites.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>