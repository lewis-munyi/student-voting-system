<?php
// Get data from form
$course_title = $_POST['course_title'];

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
$sql = "INSERT INTO courses(course_title) VALUES ('$course_title')";

if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
    header("Location: http://localhost/student-voting-system/register.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
// Close connection
mysqli_close($connection);
?>