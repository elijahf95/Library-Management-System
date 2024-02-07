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
        <form class="form" action="db.php" method="POST">
            <ul class="wrapper">
            	  <!-- Input for the First Box -->
            	  <li style="--i:5;"><input class="input" type="text" placeholder="STUDENT NAME:" required=""></li>
                <!-- Input for the Second Box -->
                <li style="--i:4;"><input class="input" type="text" placeholder="STUDENT ID:" required=""></li>
                <!-- Input for the Third Box -->
                <li style="--i:3;"><input class="input" placeholder="BOOK TITLE/ID:" required="" name="book-title"></li>
                <!-- Input for the Fourth Box -->
                <li style="--i:2;"><input class="input" type="text" placeholder="TIME CO/R:" required="" name=""></li>
                <!-- Submit button for the form -->
                <button type="submit" style="--i:1;">Submit</button>
            </ul>
        </form>
    </center>
</body>
</html>
<?php

?>
