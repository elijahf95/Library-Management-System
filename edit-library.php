<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Library Entry</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-r5mT6Q/LqG4R2dr9CJ2pdpt6z25XL3blhjC5v8ea0eAfxlKTfoBm9yJQozgqwG9N" crossorigin="anonymous">
    
</head>
<body>
    <div class="container mt-5">
        <?php
        $conn = new mysqli("localhost", "LMS", "lib", "library_db");

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
            $id = $_GET['id'];

            // Use a prepared statement to avoid SQL injection
            $sql = $conn->prepare("SELECT * FROM library WHERE id = ?");
            $sql->bind_param("i", $id);
            $sql->execute();
            $result = $sql->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                ?>
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Library Entry</h5>
                    </div>
                    <div class="card-body">
                        <form action="update-library.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                            <div class="mb-3">
                                <label for="studentname" class="form-label">Student Name:</label>
                                <input type="text" name="studentname" class="form-control" value="<?php echo $row['studentname']; ?>" required>
                            </div>

							<div class="mb-3">
    							<label for="studentid" class="form-label">Student ID:</label>
    							<input type="text" name="studentid" class="form-control" value="<?php echo isset($row['studentid']) ? $row['studentid'] : ''; ?>" required>
							</div>


                            <div class="mb-3">
                                <label for="booktitle" class="form-label">Book Title:</label>
                                <input type="text" name="booktitle" class="form-control" value="<?php echo $row['booktitle']; ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="timeco" class="form-label">Time CO/R:</label>
                                <input type="text" name="timeco" class="form-control" value="<?php echo $row['timeco']; ?>" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
                <?php
            } else {
                echo "Record not found.";
            }
            $sql->close();
        } else {
            echo "Invalid request.";
        }
        $conn->close();
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
