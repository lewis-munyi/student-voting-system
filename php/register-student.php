<?php
// Get data from form
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$reg_no = $_POST['reg_no'];
$course_title = $_POST['course_title'];
$course_year = $_POST['course_year'];
$email = $_POST['email'];
$salt = 'chemshabongo';
$cryptopassword = (hash(sha256, $salt.$_POST['password']));

// Database data
$db_host = "localhost";
$db_name = "votingSystem";
$db_user = "root";
$db_password ="root";	

// Create connection
$connection = mysqli_connect($db_host, $db_user ,$db_password, $db_name);
// Check connection

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Sql Query
$sql = "INSERT INTO registeredStudents(studentRegistration, first_name, second_name, studentCourse, academicYear, studentEmail, studentPassword)
VALUES ('$reg_no', '$fname', '$sname', '$course_title', '$course_year', '$email', '$cryptopassword')";

if (mysqli_query($connection, $sql)) {
	echo $cryptopassword;
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
// Close connection
mysqli_close($Connection);

?>