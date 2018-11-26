<?php include "conn.php";

session_status();

if(isset($_SESSION['employee'])!=""){
    header("Location: all_employees.php");
}
if(isset($_POST["SubmitButton"])) {
    $id = $_POST['employee_id'];
//    $id = 1;
    $pwd = $_POST['employee_password'];
//    $pwd = 123;
    $sql="SELECT* FROM EMPLOYEE WHERE employee_id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if($row['employee_password']==$pwd) {
        $_SESSION['employee_id'] = $id;
        $_SESSION['employee'] = "employee";
        header("Location: all_employees.php");
    }else {
        echo "Wrong";
        ?>
        <script>alert('wrong details, please login again.');</script>

        <?php
        header("Location: login.php");
    }
}

?>