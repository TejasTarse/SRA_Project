<?php
session_start();

$username =$_POST['username'];
$password =$_POST['password'];

if($username=="a" && $password=="2")
{
    $_SESSION['user']="TEJAS";
    header("Location:home.php");
}
else
{
    header("Location:index.php?status=failed");
}



?>