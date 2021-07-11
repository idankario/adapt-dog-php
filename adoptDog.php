<!DOCTYPE html>
<html lang="en" >
<head>
	<link rel="icon" href="images/adopt.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">	<link rel="stylesheet"  href="./css/style.css" type="text/css" media="all">
	<link rel = "stylesheet" href="css/style.css">
	<title>Update Dog Database</title>
</head>
<?php
 	include 'php/connection.php';
	//get data from DB
	$query = "SELECT * FROM dogs_220";
	$dogs = mysqli_query($connection, $query); 
	if(!$dogs)
		die("Error with db")
?>
<body >
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
			<a  href="index.php"><i></i> Our Home</a>
			<a href="#" id="currentWeb"><i></i>Adopt Me</a>
			<a href="#"><i></i>Donate Us</a>
			<?php echo $navUser;?>
			<?php echo $navAdmin;?>
		</div> 
  </nav>
	<!-- main -->
	<main class="container-fluid flex-center">
    	<h1>Dogs for adoption</h1>
		<!-- form filter -->
		<form action="#" class="row text-center  mt-5" id="filter">
			<select data-filter="gender" class="filter-gender filter form-control">
				<option value="">gender</option>
				<option value="">Show All</option>
			</select>
			<select data-filter="age" class="filter-age filter form-control">
				<option value="">Age Limit</option>
				<option value="">Show All</option>
			</select>
			<select data-filter="size" class="filter-size filter form-control">
				<option value="">Size</option>
				<option value="">Show All</option>
			</select>
			<select data-filter="type" class="filter-type filter form-control">
				<option value="">Type</option>
				<option value="">Show All</option>
			</select>
		</form>
		<!-- form search -->
		<form action="#" id="search-form" class="row n"  method="POST" enctype="multipart/form-data">
			<input class="form-control n" type="text" placeholder="Search" />
			<button type="submit" class="btn btn-block btn-primary">Search</button>
		</form>	
		<!-- dog to adopt -->
		<section class="flex-wrap justify-content-center" id="products">
		<?php
			foreach ($dogs as $key => $row) {
					$name= $row['dog_name'];
					$parameters='?DogId='.$row["dog_id"];
					echo'<a data-type="'.$row['dog_type'].'" data-gender='.$row['gender'].' data-name='.$name.' 
						data-age='.$row['age'].' data-size='.$row['size'].'  href="updateDog.php'.$parameters.'" >
							<img class="rounded-circle" alt='.$name.' title='.$name.' src='.$row['image'].'>
							<h3>'.$name.'</h3>
						</a>';
			}
			 //release returned data
 			mysqli_free_result($dogs);
		?>
		</section>
	</main>
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
  	<script src="./js/petsAndFileter.js"></script>
	<script src="js/app.js"></script>
</body>
</html>
<?php
	//close DB connection
	mysqli_close($connection);
?>
