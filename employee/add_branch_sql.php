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
$location = ($_POST["location"]);
$city = ($_POST["city"]);
$telephone = ($_POST["telephone"]);
$fax = ($_POST["fax"]);
$opening_date = ($_POST["opening_date"]);
$branch_manager = ($_POST["branch_manager"]);
$head = 0;
//
$sql = "INSERT INTO BRANCH (branch_location,branch_city_id,branch_phone,branch_fax,
branch_opening_date,branch_manager,branch_is_head_office) VALUES('$location', '$city', '$telephone', 
'$fax', '$opening_date', '$branch_manager', $head);";
if ($conn->query($sql) === TRUE) {
    echo "New record added";
    header("Location: all_branches.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>