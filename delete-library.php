<?php 

$id = $_GET['id'];

$conn = new mysqli("localhost", "LMS", "lib", "library_db");

$sql = "DELETE FROM library WHERE id=".$id."";

$conn->query($sql);

header('location: index.php');
