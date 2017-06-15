<?php
$db_host = "localhost";
$db_name = "votingSystem";
$db_user = "root";
$db_password ="root";
$connection = mysqli_connect($db_host, $db_user ,$db_password, $db_name);

$sql = "SELECT * FROM registeredStudents";
if($result = mysqli_query($connection, $sql)){
	$myjson = json_encode(mysqli_fetch_array($result));
	/*while ($data = mysqli_fetch_array($result)) {
		$number = "+254".$data[phone_number];
		echo($data['first_name'] . ' ' . $data['second_name'] . $number );
	}*/
	header("Location: https://africastalking-lewismunyi.c9users.io/sendsms.php?numbers=$myjson");
	echo "Done";
	//header("location: http://localhost/student-voting-system/admdash.php");
}
else{
	echo("error".mysqli_error($connection));
}

?>