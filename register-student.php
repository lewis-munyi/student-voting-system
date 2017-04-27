<?php
echo "Hello world!";
$reg_no = $_POST['reg_no'];
$name = $_POST['name'];
$course_code = $_POST['course_code'];
$course_title = $_POST['course_title'];
$course_year = $_POST['course_year'];
$email = $_POST['email'];

echo $course_year;
echo ($reg_no.$course_year.$course_title.$course_code.$email.$name);

$db_host = "localhost";
$db_name = "votingSystem";
$db_user = "root";
$db_password ="root";	

/*$connection = msql_connect($db_host, $db_user ,$db_password, $db_name) or die("Error establishing connection!");

mysql_query($connection,"INSERT INTO nominees (nomineeRegistrationNumber, nomineeName, nomineeCourseCode, nomineeCourse, nomineeYear, nomineeEmail)VALUES('$reg_no', '$name', '$course_code', '$course_title', '$course_year', '$email')") or die("Error populating database");*/
/*try {
	$connection = msql_connect($localhost, $db_user ,$db_password, $db_name);
	try {
		mysql_query($connection,"INSERT INTO nominees (nomineeRegistrationNumber, nomineeName, nomineeCourseCode, nomineeCourse, nomineeEmail)VALUES ($reg_no, $name, $course_code, $course_title, $course_year, $email)";
	} catch (Exception $e) {
		echo "Error populating database";
	}
} catch (Exception $e) {
	echo "Error establishing connection!";
}
*/
/*echo ($name);
echo "Hello world!";*/



// Create connection
$conn = mysqli_connect($db_host, $db_user ,$db_password, $db_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO contestant(contestantName, contestantRegistrationNumber, contestantCourseCode, contestantCourse, contestantYear, contestantEmail)
VALUES ('$name', '$reg_no', '$course_code', '$course_title', '$course_year', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>