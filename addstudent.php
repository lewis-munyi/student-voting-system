<?php 


$db_host = "localhost";
$db_name = "votingSystem";
$db_user = "root";
$db_password ="root";
$connection = mysqli_connect($db_host, $db_user ,$db_password, $db_name);


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$regno = $_POST['reg_no'];
$phone_no = $_POST['phone_no'];
$email = $_POST['email'];
$post = $_POST['post'];

$sql = "INSERT INTO contestants (contestantRegistrationNumber, first_name, second_name,  contestantEmail, phone_number, contestantPost) VALUES ('$regno', '$first_name', '$last_name', '$email', '$phone_no', '$post')";
if($result = mysqli_query($connection, $sql)){
	header("location: http://localhost/student-voting-system/admdash.php");
}
else{
	echo("error".mysqli_error($connection));
}
 ?>
