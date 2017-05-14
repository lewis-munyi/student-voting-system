<?php 
$password = "12345";
echo $password;
echo "\n";
$salt = 'Munyi';
echo $salt;
echo "\n";
$newpassword = (hash(sha256, $salt.$password));
echo $newpassword;
 ?>