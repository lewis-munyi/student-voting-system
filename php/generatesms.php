<?php 
	session_start();
    $min = 10000;
    $max = 99999;
    $code = (random_int(  $min , $max ));
    $_SESSION["code"] = $code;
    
    header("Location: https://africastalking-lewismunyi.c9users.io/sms.php?code=$code");   
 ?>