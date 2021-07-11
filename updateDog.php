<!DOCTYPE html>
<html lang="en" >
<head>
	<link rel="icon" href="images/adopt.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">	<link rel="stylesheet"  href="./css/style.css" type="text/css" media="all">
	<link rel = "stylesheet" href="css/style.css">
	<title>Edit Dog</title>
	<?php
		include 'php/connection.php';
		if($DogId)
		{ 
			$query = "SELECT * FROM dogs_220 where dog_id=".$DogId;
			// echo $query;
			$result = mysqli_query($connection, $query);
			if($result) {
				$row = mysqli_fetch_assoc($result); //there is only 1 item with id=X
			}
			else die("DB query failed.");
		}
		else{
			header('Location: adoptDog.php'); 
		}
		if($UserId){
			if($UserRole=='Admin'){
				$button='<button onclick=location.href="createNewPet.php?DogId='.$DogId.
						'" type="button"><i class="fas fa-pen"></i> Edit</button>
						<button onclick=location.href="createNewPet.php?State=Delete&DogId='.$DogId.
						'" type="button"><i class="far fa-trash-alt"></i> Delete</button>';	
			}
			else{
				$button='<button onclick=location.href="adopt_meeting.php?DogId='.$DogId.
						'" type="button"><i class="fas fa-paw"></i>adopt</button>';
			}
		}
		else{
			$Parameters='?DogId='.$DogId.'&page=adopt_meeting.php';
			$AdoptMeeting=' onclick=location.href="signIn_signUp.php'.$Parameters.'DogId='.$DogId.'"';
			$button='<button'.$AdoptMeeting.' type="button"><i class="fas fa-paw"></i>adopt</button>';
		}
	?>
</head>
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
			<a href="adoptDog.php"><i></i>Adopt Me</a>
			<a href="#"><i></i>Donate Us</a>
			<?php echo $navUser;?>
			<?php echo $navAdmin;?>
		</div> 
  	</nav>
    <!-- main -->
    <main class="container-fluid flex-center ">
        <article class="d-flex flex-center align-items-center">
			<?php
				$name= $row['dog_name'];			
				echo'<h1 class="">'.$name.'</h1>
					<div class="d-flex flex-wrap  mt-5 ">
						<img alt="'.$name.'" title="'.$name.'" src="'.$row['image_big'].'">
						<div class="text-c">
							<p> Gender:'.$row['gender'].'</p>
							<p>Size: '.$row['size'].'</p> 
							<p>Type: '. $row["dog_type"] .'</p>
							<p>Age: '.$row['age'].'</p>
						</div>
					</div>
					<div class=" mt-5 mb-5">'.$button.'</div>';
				//release returned data
				if($result) mysqli_free_result($result);
			?>
        </article>
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
	<script src="https://kit.fontawesome.com/64d58efce2.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
</body></html>
<?php
	//close DB connection
	mysqli_close($connection);
?>