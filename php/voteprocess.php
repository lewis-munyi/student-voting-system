<?php 

session_start();
echo ($_SESSION["reg_no"]);
echo ($_SESSION["name"]);

// Get data from form
$chair = $_POST['chairperson'];
$vice = $_POST['vice'];
$treasurer = $_POST['treasurer'];
$orgsec = $_POST['orgsec'];
$accom = $_POST['accom'];
$gender = $_POST['gender'];
$sports = $_POST['sports'];
$academics = $_POST['academics'];
echo($chair." ".  $treasurer." ".$orgsec.$accom.$gender.$sports.$academics);
$mydata = array($chair, $vice, $treasurer, $orgsec, $accom, $gender, $sports, $academics);
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

for($i=0;$i<sizeof($mydata);$i++)
{
	$re_no = $_SESSION['reg_no'];
	
	$crypto_regno = (hash(sha256, $re_no));
	$qr = "insert into votes(contestant_id, student_id, post_id) values ($mydata[$i], '$crypto_regno', $i+1)";
	if ($success = mysqli_query($connection, $qr)) {
		echo "success";
		$confirm = mysqli_query(connection, sql)
		//$sql = "select ". $re_no . " from registeredStudents";
		//UPDATE `registeredStudents` SET `voteStatus` = '1' WHERE `registeredStudents`.`id` = 2;

	}
	else{
		echo(mysqli_error($connection));
	}
}



// $array = array(1, "hello", 1, "world", "hello");
// print_r(array_count_values($array));

// Array
// (
//     [1] => 2
//     [hello] => 2
//     [world] => 1
// )


?>
