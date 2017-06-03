<?php
require "config.php"; // Database Connection

// Sql Query
$sql="SELECT * FROM contestants WHERE contestantPost = 1"; 
//$sql="SELECT id, studentRegistration, first_name, second_name, studentEmail FROM registeredStudents"; 
$row=$dbo->prepare($sql);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);
//echo $row;
echo json_encode(array('data'=>$result));




?>



