<?php
///////// Database Details change here  ////
$dbhost_name = "localhost";
$database = "votingSystem";
$username = "root";
$password = "root";
//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage();
die();
}
?>