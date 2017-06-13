<?php 
session_start();
$_SESSION["code"] = $code;
$_SESSION["reg_no"] = $reg_no;
$_SESSION["name"] = $firstname;
$_SESSION["email"]= $x;
$_SESSION["admin_name"] = $name;

session_destroy();
header("Location: http://localhost/student-voting-system/index.php")

 ?>