<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//Db DETAILS
$server = "127.0.0.1";
$username = "root";
$password = "password";
$db = "golf";

$conn = new mysqli($server, $username, $password, $db);

$myArray = array();
if ($result = $conn->query("select * from scores")) {
	$data = $result->fetch_all(MYSQLI_ASSOC);
	echo json_encode($data);
}else{
	echo "COuld not run Query";
}

