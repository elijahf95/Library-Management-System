<?php

$id = $_GET['id'];

$conn = new mysqli("localhost", "LMS", "lib", "library_db");
$sql = "SELECT * FROM library WHERE id=".$id."";
$result = $conn->query($sql);

$data = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LIBRARY MANAGEMENT SYSTEM</title>
</head>

<body>
	<div class="container">
		<br>

		<form action="update-library.php?id=<?php echo $data['id']; ?>" method="POST">
			<div class="row">

				<div class="col-lg-3"></div>
				<div class="col-lg-4">
				<h3>UPDATE LIBRARY</h3>
				<div class="mb-3">

					<label for="exampleFormControlInput1" class ="form-label">Student Name:</label>
					<input value="<?php echo $data['studentname']; ?>" name="studentname" type="text" class="form-control" />
				</div>

				<div class=mb-3>
					<label for="exampleFormControlInput1" class="form-label">Book Title:</label>
					<input value="<?php echo $data['booktitle'];?>" name="booktitle" type="text" class="form-control" />
				</div>

				<div class=mb-3>
					<label for="exampleFormControlInput1" class="form-label">Time Check Out:</label>
					<input value="<?php echo $data['timeco'];?>" name="timeco" type="text" class="form-control" />
				</div>

				<div class="m-3">
					<button type="submit" class="btn btn-info">Update Book</button>
				</div>
			</div>

		</div>
	</form>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>


				

</body>
</html>