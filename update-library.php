<?php

$id = $_GET['id'];
$studentname = $_POST['studentname'];
$booktitle = $_POST['booktitle'];
$timeco = $_POST['timeco'];

$conn = new mysqli("localhost", "LMS", "lib", "library_db");

$sql = "UPDATE library SET studentname='".$studentname . "',booktitle='".$booktitle."',timeco='".$timeco.'" WHERE id=".$id."";

$conn->query($sql);

header('location: index.php');


?>