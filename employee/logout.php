<?php
session_start();

if(!isset($_SESSION['employee']))
{
    header("Location: login.php");
}
else if(isset($_SESSION['employee'])!="")
{
    header("Location: all_employee.php");
}

if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['employee']);
    header("Location: login.php");
}
?>
