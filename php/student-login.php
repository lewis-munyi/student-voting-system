<?php 

session_start();

// Get data from form
$reg_no = $_POST['reg_no'];
$password = $_POST['password'];
$salt = 'chemshabongo';
$cryptopassword = (hash(sha256, $salt.$_POST['password']));
$cryptoregno = (hash(sha256, $salt.$_POST['reg_no']));
echo $cryptoregno."HELLO";
echo $cryptopassword."WORLD";

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

function voteStatus($votestatus){
    if ($votestatus == 1) {
       header("Location: http://localhost/student-voting-system/student-dashboard.php");
    } else if ($votestatus == 0 || $votestatus = "") {
        header("Location: http://localhost/student-voting-system/php/generatesms.php");
        // Close connection
        mysqli_close($connection);
    } 
    

    
    die();
}

$myquery = "SELECT * FROM registeredStudents WHERE studentRegistration = $reg_no";

if ($value = mysqli_query($connection, $myquery)) {
     if (mysqli_fetch_assoc($value)['studentPassword'] == $password){
        $firstname = mysqli_fetch_assoc(mysqli_query($connection, $myquery))['first_name'];
        $secondname = mysqli_fetch_assoc(mysqli_query($connection, $myquery))['second_name'];
        $_SESSION["reg_no"] = $reg_no;
        $_SESSION["name"] = $firstname." ".$secondname;
        
        $votestatus = mysqli_fetch_assoc(mysqli_query($connection, $myquery))['voteStatus'];

        voteStatus($votestatus);
     }
     else{
        echo "Login Unsuccessful";  
     }
} else {
    echo "Error: " . $myquery . "<br>" . mysqli_error($connection);
} 
?>