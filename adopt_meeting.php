<!DOCTYPE html>
<html lang="en">
    <head>
		<link rel="icon" href="images/adopt.png">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">	<link rel="stylesheet"  href="./css/style.css" type="text/css" media="all">
		<link rel = "stylesheet" href="css/style.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<title>Adopt femaily dogs</title>
	</head>
	<?php 
		include 'php/connection.php';
		include 'php/form_meeting.php';
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
			<a  href="index.php"><i></i> Our Home</a>
			<a href="adoptDog.php"><i></i>Adopt Me</a>
			<a href="#"><i></i>Donate Us</a>
			<?php echo $navUser;?>
			<?php echo $navAdmin;?>
		</div> 
  	</nav>
	<h1 class='text-center'>--Adopt Friend--</h1>
	<main class="c container mb-5">
		
		<section class="p-5 align-items-center justify-content-center">
			<?php 
				echo '<img class="rounded-circle" alt='.$name.' title='.$name.' src='.$row['image_big'].'>';
			?>
		</section>
		<form action="#" method="post" class="form-meeting requires-validation">
			<h2 class="text-center"><?php echo$name; ?></h2>
			<!-- Date -->
			<div class="col-9">
				<label type="text" >Date</label>
				<input type="text"  name="Date" id="datepicker" value=<?php echo $Date;?> class="form-control" required>
				<p class="invalid-feedback">Only date format:dd-mm-yyyy</p>
				<p class="valid-feedback">Looks good!</p>
			</div>
			<!-- Time -->
			<div class="col-9">
				<label class="form-label">Time</label>
				<input type="time" name="Time" id="appt" value=<?php echo $Time;?> required class="form-control" > 
				<p class="invalid-feedback">We are open from 08:00 to 21:00</p>
				<p class="valid-feedback">Looks good!</p>
			</div>
			<!-- Price -->
			<div class='col-9 mt-3'>
				  <label>Price</label>
				  <div class='radio-container'>
					<input checked='' id='price' name='price' type='radio' value='female'>
					<label for='price'>200Nis</label>
				</div>
			</div>
			<input type="hidden" name="DogId" value= <?php echo $DogId;?> >
			<input type="hidden" name="State" value="Set">
			<section class="justify-content-center mt-5">
				<button type="submit"><i class="fas fa-paw " aria-hidden="true"></i>
					<?php if($id_meeting) echo 'Update'; else echo'Adopt me'; $UserId;?> 
				</button>
			</section>
		</form>
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
  <!-- partial -->
  <script src="https://kit.fontawesome.com/64d58efce2.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="./js/constructValidation.js"></script>
  <script src="js/date.js"></script>
  <script src="js/app.js"></script>
</body>
</html>
