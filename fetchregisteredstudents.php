<?php
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
$sql="select first_name, last_name  from student "; 
$row=$dbo->prepare($sql);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);

echo json_encode(array('data'=>$result));

?>



