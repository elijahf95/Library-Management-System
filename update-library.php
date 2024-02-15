<?php
$conn = new mysqli("localhost", "LMS", "lib", "library_db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $studentname = $_POST['studentname'];
    $booktitle = $_POST['booktitle'];
    $timeco = $_POST['timeco'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("UPDATE library SET studentname=?, booktitle=?, timeco=? WHERE id=?");
    $stmt->bind_param("ssssi", $studentname, $studentid, $booktitle, $timeco);
    
    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}

$conn->close();
?>
