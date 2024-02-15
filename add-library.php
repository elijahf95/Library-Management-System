<?php

$studentname = $_POST['studentname'];
$booktitle = $_POST['booktitle'];
$timeco = $_POST['timeco'];

$conn = new mysqli("localhost", "root", "", "library_db");

$sql = "INSERT INTO library (studentname, booktitle, timeco) VALUES ('".$studentname."', '".$booktitle."', '".$timeco."')";

	$conn->query($sql);

	header('location: index.php');


?>