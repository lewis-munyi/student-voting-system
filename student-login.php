<?php 
// Get data from form
$reg_no = $_POST['reg_no'];
$password = $_POST['password'];

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

$myquery = "SELECT * FROM registeredStudents WHERE studentRegistration = $reg_no";

if ($value = mysqli_query($connection, $myquery)) {
     if (mysqli_fetch_assoc($value)['studentPassword'] == $password){
     	echo "Login Successful";
     }
     else{
     	echo "Login Unsuccessful";	
     }
} else {
    echo "Error: " . $myquery . "<br>" . mysqli_error($connection);
} 

// Close connection
mysqli_close($connection);
?>