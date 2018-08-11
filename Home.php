<!DOCTYPE html>
<html lang="en">
<head>
  <title>BK Home</title>
  <?php include("header.php"); ?>
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
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">People</a></li>
        <li><a href="#">Animals</a></li>
		<li><a href="#">Nature</a></li>
		<li><a href="#">Candid</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img class="thumbnail" src="images\5.jpg" alt="KNR1" style="width:100%;">
      </div>

      <div class="item">
        <img class="thumbnail" src="images\2.jpg" alt="KNR2" style="width:100%;">
      </div>
    
      <div class="item">
        <img class="thumbnail" src="images\3.jpg" alt="knr3" style="width:100%;">
      </div>
	  
	   <div class="item">
        <img class="thumbnail" src="images\4.jpg" alt="knr4" style="width:100%;">
      </div>

	  <div class="item">
        <img class="thumbnail" src="images\6.jpg" alt="knr5" style="width:100%;">
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>
