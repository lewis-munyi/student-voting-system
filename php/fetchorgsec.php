<?php
require "config.php"; // Database Connection

// Sql Query
$sql="SELECT * FROM contestants WHERE contestantPost == 8"; 
$row=$dbo->prepare($sql);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);
//echo $row;
echo json_encode(array('data'=>$result));

?>



