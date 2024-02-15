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



<?php while ($row= $result->fetch_assoc())
: ?>

<?php
function getCurrentCount($conn) {
    $sql = "SELECT COUNT(studentname) as count FROM library";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['count'];
    } else {
        return 0;
    }
}
?>
<br>
<table>
    <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Book Title</th>
        <th>Time</th>
        <th>Action</th>
    </tr>
    <?php
    // Assuming you have a database connection object named $conn
    $sql = "SELECT * FROM library";
    $result = $conn->query($sql);
    $id = getCurrentCount($conn);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['studentname']; ?></td>
                <td><?php echo $row['booktitle']; ?></td>
                <td><?php echo $row['timeco']; ?></td>
            </tr>
            <?php
        }
    } else {
        ?>
        <tr>
            <td colspan="4">No records found</td>
        </tr>
        <?php
    }
    ?>
</table>

		<a href="edit-library.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info">Edit</a>
		<style>
			a {
  position: relative;
  padding: 10px 20px;
  border-radius: 7px;
  font-size: 14px;
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 2px;
  background: transparent;
  color: #000;
  overflow: hidden;
  box-shadow: 0 0 0 0 transparent;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

a:hover {
  background: rgb(8, 108, 126);
  box-shadow: 0 0 30px 5px rgba(0, 142, 236, 0.815);
  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
}

a:hover::before {
  -webkit-animation: sh02 0.5s 0s linear;
  -moz-animation: sh02 0.5s 0s linear;
  animation: sh02 0.5s 0s linear;
}

a::before {
  content: '';
  display: block;
  width: 0px;
  height: 86%;
  position: absolute;
  top: 7%;
  left: 0%;
  opacity: 0;
  background: #fff;
  box-shadow: 0 0 50px 30px #fff;
  -webkit-transform: skewX(-20deg);
  -moz-transform: skewX(-20deg);
  -ms-transform: skewX(-20deg);
  -o-transform: skewX(-20deg);
  transform: skewX(-20deg);
}

@keyframes sh02 {
  from {
    opacity: 0;
    left: 0%;
  }

  50% {
    opacity: 1;
  }

  to {
    opacity: 0;
    left: 100%;
  }
}

a:active {
  box-shadow: 0 0 0 0 transparent;
  -webkit-transition: box-shadow 0.2s ease-in;
  -moz-transition: box-shadow 0.2s ease-in;
  transition: box-shadow 0.2s ease-in;
}


		</style>
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