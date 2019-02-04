<link rel="stylesheet" type="text/css" href="styles.css">

<?php 

require_once("src/scores.php");

$app="Golf";

echo "<h1>Hello $app</h1>";

if($_GET["success"]){
	echo "<h2>Record created successfully";
}

$scores = new Scores();
$scores->showScores();
$scores->showAdd();

if($_POST){
	$scores->addScore($_POST);
}

//We do a redirect to prevent reload inserting data again.
//But then we canot show text when an insert works so we added a get command.

if($_SERVER["PATH_INFO"] == "/delete" && $_GET['id']){
	$scores->delete($_GET['id']);
}






