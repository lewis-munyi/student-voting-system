<?php
require "config.php"; // Database Connection

// Sql Query
$sql="SELECT course_code, course_title FROM courses"; 
$row=$dbo->prepare($sql);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);
//echo $row;
echo json_encode(array('data'=>$result));

?>



