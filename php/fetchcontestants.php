<?php
require "config.php"; // Database Connection

// Sql Query
$sql="SELECT id, contestantRegistrationNumber, first_name, second_name, contestantEmail, contestantCourse FROM contestants"; 
$row=$dbo->prepare($sql);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);
//echo $row;
echo json_encode(array('data'=>$result));

?>



