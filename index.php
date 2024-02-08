<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LIBRARY MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <!-- Adding line breaks for spacing -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>
        <form class="form" action="add-library.php" method="POST">
            <ul class="wrapper">

            	  <!-- Input for the First Box -->
            	  <li style="--i:5;"><input name= "studentname" class="input" type="text" placeholder="STUDENT NAME:" required=""></li>

                <!-- Input for the Second Box -->
                <li style="--i:4;"><input name="studentid" class="input" type="text" placeholder="STUDENT ID:" required=""></li>

                <!-- Input for the Third Box -->
                <li style="--i:3;"><input name="booktitle" class="input" placeholder="BOOK TITLE/ID:" required="" name="book-title"></li>

                <!-- Input for the Fourth Box -->
                <li style="--i:2;"><input name="timeco" class="input" type="text" placeholder="TIME CO/R:" required="" name=""></li>
                
                <!-- Submit button for the form -->
                <button type="submit" style="--i:1;">Submit</button>
            </ul>
        </form>
    </center>
<?php
$conn = new mysqli("localhost", "LMS", "lib", "library_db");

$sql = 'SELECT * FROM library';

$result = $conn->query($sql);

?>

<div class="row">
	<table class="table table-border"><br>
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Student Name</th>
				<th scope="col">ID Number</th>
				<th scope="col">Book</th>
				<th scope="col">Time Check Out</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>

<?php while ($row= $result->fetch_assoc())
: ?>
<tr>
	<td><?php echo $row['id']; ?></td>
	<td><?php echo $row['studentname']; ?></td>
	<td><?php echo $row['booktitle']; ?></td>
	<td><?php echo $row['timeco']; ?></td>
	<td>
		<a href="edit-library.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info">Edit</a>
		<a onclick="delete_library(<?php echo $row['id']; ?>)" href="#" class="btn btn-sm btn-danger">Delete</a>
	</td>
</tr>
<?php endwhile; ?>
</tbody>
</table>
</div>

</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>

  </body>

  <script>
  	function delete_library(id){
  		if (confirm("Do you want to delete this data?")){
  			swindow.location = "delete-library.php?id"+id;
  		}
  	}
  </script>





</body>
</html>