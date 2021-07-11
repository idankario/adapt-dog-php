<!DOCTYPE html>

<html lang="en-US" >
<head>
	<link rel="icon" href="images/adopt.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">	<link rel="stylesheet"  href="./css/style.css" type="text/css" media="all">
	<link rel = "stylesheet" href="css/style.css">
	<title>Adopt Joy Home Page</title>
</head>
<?php
    include 'php/connection.php';
?>
<body>
  	<!-- nav -->
	<nav class="navbar navbar-expand-lg navbar-dark ">
		<button class="navbar-toggler mb-2 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- header -->
		<header>		
			<a id="logo" href="index.php"></a>	
		</header>	
		<?php echo $profile_nav;?>
		<div class="collapse navbar-collapse navIcon"  id="navbarText" >
			<a  href="#" id="currentWeb"><i></i> Our Home</a>
			<a href="adoptDog.php"><i></i>Adopt Me</a>
			<a href="#"><i></i>Donate Us</a>
			<?php echo $navUser;?>
			<?php echo $navAdmin;?>
		</div> 
  	</nav>
	<section class="slider-container-header">
		<!-- Controls -->
		<div class="slider-control left"></div>
		<div class="slider-control right"></div>
		<!--Slider -->
		<section class="slider" >
		</section>
		<!--shape-->
		<svg class="curve" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff">
			<path d="M0 100 C 20 0 50 0 100 100 Z"></path>
		</svg>
		<ul class="slider-pagi">
		</ul>
	</section>
	<section class="flex-center m-5" > 
		<h1>---OUR SERVICES---</h1>	
		<section class='box flex-wrap'>
			<section>
				<h3><i></i>Adopt dog</h3>
				<p>Our software is made so you can access and manage your budget and expenses online at any time from any device. It provides detailed income and expense reports with graphs so you can easilly see your spending patterns and budget at a glance. Read below to find out more.</p>
			</section>
			<section>
				<h3><i></i>Donate us</h3>
				<p>Our software is made so you can access and manage your budget and expenses online at any time from any device. It provides detailed income and expense reports with graphs so you can easilly see your spending patterns and budget at a glance. Read below to find out more.</p>
			</section>
			<section>
				<h3><i></i>About</h3>
				<p>Our software is made so you can access and manage your budget and expenses online at any time from any device. It provides detailed income and expense reports with graphs so you can easilly see your spending patterns and budget at a glance. Read below to find out more.</p>
			</section>
		</section>
	</section>
	<!-- footer -->
	<footer>
		<section>
			<a href="#">SEE OUR WORK</a>
			<a href="#">ABOUT US</a>
			<a href="#">CONTACTS</a>
		</section>
		<section></section>
		<section class="medialinks">
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
		</section>
	</footer>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  	<script src="js/app.js"></script>
	<script src="./js/slide.js"></script>
</body></html>