<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>



<form action="upload1.php" method="post" enctype="multipart/form-data">
    <P>Select image to upload:</p>
	<input type="file" name="fileToUpload" id="fileToUpload"></br></br>
	<p> Select The Image Type</p>
	<input type="radio" name="category" value="nature/" checked> Nature<br>
    <input type="radio" name="category" value="people/"> People<br>
    <input type="radio" name="category" value="candid/"> Candid<br>
	<input type="radio" name="category" value="others/"> others<br>
	
    <input type="submit" value="Upload Image" name="submit">
</form>

<p><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>