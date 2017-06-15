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
$password = $_POST['password'];

$sql = "INSERT INTO registeredStudents(studentRegistration, first_name, second_name,  studentEmail, phone_number, studentPassword) VALUES ('$regno', '$first_name', '$last_name', '$email', '$phone_no', '$password')";
if($result = mysqli_query($connection, $sql)){
	echo "success";
	header("location: http://localhost/student-voting-system/admdash.php");
}
else{
	echo("error".mysqli_error($connection));
}
 ?>
