<?php
// Get data from form
$reg_no = $_POST['reg_no'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$course_title = $_POST['course_title'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$rep_post = $_POST['rep_post'];

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

$myquery = "SELECT * FROM contestants WHERE contestantRegistrationNumber = $reg_no";

if ($value = mysqli_query($connection, $myquery)) {
     if (mysqli_fetch_assoc($value)['contestantRegistrationNumber'] != $reg_no){
     	// Sql Query
		$sql = "INSERT INTO contestants(contestantRegistrationNumber, first_name, second_name, contestantEmail, contestantCourse, phone_number,  contestantPost)
			VALUES ('$reg_no','$fname', '$sname', '$email', '$course_title', '$phone_number', '$rep_post')";
		if (mysqli_query($connection, $sql)) {
    		echo "New record created successfully";
			}
			else{
    			echo "Error: " . $sql . "<br>" . mysqli_error($connection);
				}
     	//redirect();
     }
     else{
     	echo "Login Unccessful. \n The user already exists";
     }
}



// Close connection
mysqli_close($connection);
?>