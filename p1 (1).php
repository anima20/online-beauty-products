<?php
session_start();
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="p1 (1).css">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
</head>
<body style="background-image: linear-gradient(white); background-position:cover;">
<div class="header"><p>dbhkjnl</p></div>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: -75px;">
  <img id="img3" src="images/beauty.jpg">
  <label class="text-muted" style="margin-left:-03% ; font-size: 20px ; margin-top: 5%">Hello<b> <?= $_SESSION['user'] ?> !!</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: 60px; margin-left: -3%">
    <ul class="navbar-nav mr-auto">
    	<li>
       <a class="nav-link" href="p1 (1).php">Home</a>
      </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <li class="nav-item">
       <a class="nav-link" href="all_data.php">All Products</a>
      </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="body_care.php">Body Care</a>
          <a class="dropdown-item" href="face_care.php">Face Care</a>
          <a class="dropdown-item" href="deodrants.php">Deodrants</a>
          <a class="dropdown-item" href="make_up.php">Make Up</a>
          <a class="dropdown-item" href="moist_lotion.php">Moisturiser & Lotion</a>
      </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <li class="nav-item">
       <a class="nav-link" href="about.php">About Us</a>
      </li>
    </ul>


	<!-- <input type="button" id="b1" value="Sign Up" class="text-muted" onclick="location.href='registration.html'" style="margin-top: -10px;"> &nbsp
	<input type="button" id="b1" value="login" class="text-muted" onclick="location.href='log.html'" style="margin-top: -10px;">       -->
	<a href="cart.php"><img src="images/cart.png" style="height: 20px ; width: 40px; margin-top: -30% ; margin-bottom: -19% ; margin-left: 50%;"></a>
    <?php
    if($_SESSION['user']=="admin")
    {
      echo '<input type="button" id="b1" value="Admin" class="text-muted" onclick="fun()">'; 
    echo "<script type='text/JavaScript'>
          function fun()
          {
            location.href='product.php';
          }
        </script>";
        
    }
    ?>

	<input type="button" id="b1" value="Logout" class="text-muted" onclick="location.href='logout.php'">
  </div>
</nav><br>
</div>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -2% ">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/pic.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/eye.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/nail.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div >
	<img src="images\arrow.png" style="width: 50px ; height: 55px ; margin-left: 48.5%">
	<h1 style="margin-left: 40%" class="text-muted">OUR   PRODUCTS</h1>

</div>


<div class="d3">
   <div class="i1">
	<a href="body_care.php" ><img src="images/body_care.jpg" id="img2" ></a>
	<a href="body_care.php"><p>Body Care </p></a>
	</div>
	<div class="i1">
	 <a href="face_care.php"><img src="images/face_care.jpg" id="img2"></a>
	 <a href="face_care.php"><p>Face Care</p></a>
	 </div>
	 <div class="i1">
	<a href="deodrants.php"><img src="images/deo.jpg" id="img2"></a>
	<a href="deodrants.php"><p>Deodrants</p></a>
	</div>
	<div class="i1">
	 <a href="make_up.php"><img src="images/lipstick.gif" id="img2"></a>
	 <a href="make_up.php"><p>Make Up</p></a>
	 </div>
	 <div class="i1">
	 <a href="moist_lotion.php"><img src="images/lotion.jpg" id="img2"></a>
	 <a href="moist_lotion.php"><p>Mosituriser & Lotion</p></a>
	 </div>
</div>



<script type="text/javascript">
	
	window.onscroll = function() {myFunction()};
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>	
</body>
</html>