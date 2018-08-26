<?php require("header.php");

?>
<!DOCTYPE HTML>
<html>
<head>

</head>
<body style="background-color:grey">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">	
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a style="color:orange;font-size:20px" class="navbar-brand" href="#"><b>BK PHOTOGRAPHY<b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="Home.php">Home</a></li>
        <li><a href="people.php">People</a></li>
		<li><a href="nature.php">Nature</a></li>
		<li><a href="candid.php">Candid</a></li>
		<li class="active"><a href="others.php">Others</a></li>
		
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<?php
include("imgaccess.php");
$cat = new imgaccess;
$cat->setcat( "others/" );
$cat->getimg();
?>
</body>
<html>