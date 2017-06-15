<?php
session_start();
echo $message;

$db_host = "localhost";
$db_name = "votingSystem";
$db_user = "root";
$db_password ="root";
$connection = mysqli_connect($db_host, $db_user ,$db_password, $db_name);

$message = $_POST['report'];
$user = $_SESSION['reg_no'];
$sql = "INSERT INTO messages(sender_id, message) VALUES ('$user', '$message')";
if($result = mysqli_query($connection, $sql)){
	echo "success";
	header("location: http://localhost/student-voting-system/student-dashboard.php");
}
else{
	echo("error".mysqli_error($connection));
}
 ?>
