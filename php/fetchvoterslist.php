<?php
require "config.php"; // Database Connection
$min = 1000;
        $max = 9999;
        $code = (random_int(  $min ,  $max ));
        echo $code;
// Sql Query
//$sql="SELECT * FROM contestants WHERE contestantPost == 1"; 
//$row=$dbo->prepare($sql);
//$row->execute();
//$result=$row->fetchAll(PDO::FETCH_ASSOC);
//echo $row;
//echo json_encode(array('data'=>$result));

?>



