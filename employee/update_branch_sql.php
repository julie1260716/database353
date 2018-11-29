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
$dbname = "353s";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed " . $conn->connect_error);
}

$id = $_POST['branch_id'];
$telephone = ($_POST["branch_phone"]);
$fax = ($_POST["branch_fax"]);
$manager_id = ($_POST["branch_manager"]);
$head = ($_POST["head"]);


$sql = "UPDATE BRANCH SET branch_phone = $telephone, branch_fax = $fax,
branch_manager = $manager_id, branch_is_head_office = $head
WHERE branch_id='$id'";

$result = mysqli_query($conn, $sql);
if ($conn->query($sql) === TRUE) {
    echo "The employee $name is updated";
    header("Location: all_branches.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>


