<!DOCTYPE html>
<html lang="en">
    <head>
		<link rel="icon" href="images/adopt.png">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">	<link rel="stylesheet"  href="./css/style.css" type="text/css" media="all">
		<link rel = "stylesheet" href="css/style.css">
		<title>Create Dog</title>
	</head>
	<?php 
		include 'php/connection.php';
		include 'php/form_new_dog.php';
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
			<a href="#" id="currentWeb"><i></i>Add Pet</a>
		</div> 
  	</nav>
	<h1 class='text-center'>--Create a new dog--</h1>
		<main class="c container mb-5">
		<section class="p-5 align-items-center justify-content-center">
			<img src='images/form.svg' alt="dog" title="dog">
		</section>
		<form action="#" method="post" class="form-pet requires-validation">
			<h2 class="text-center">ADOPT JOY</h2>
			<!-- Full Name -->
			<div class="col-9">
				<label class="form-label">Name Puppie</label>
				<input type="text" value="<?php echo $dog_name;?>" name="dog_name" class="form-control" required>
				<p class="invalid-feedback">Only two words with one space</p>
				<p class="valid-feedback">Looks good!</p>
			</div>
			<!-- Type -->
			<div class="col-9">
				<label class="form-label">Type</label>
				<input type="text" value="<?php echo $dog_type;?>" name="dog_type" class="form-control" required>
				<p class="invalid-feedback">Only two words with one space</p>
				<p class="valid-feedback">Looks good!</p>
			</div>
			<!-- Gender -->
			<div class='col-9 mt-3'>
				  <label>Gender</label>
				  <div class='radio-container'>  
					<input <?php if($gender=="Female")echo "checked=''";?>  id='female' name='gender' type='radio' value="Female">
					<label for='female'>Female</label>
					<input <?php if($gender=='Male')echo "checked=''";?> id='male' name='gender' type='radio' value='Male'>
					<label for='male'>Male</label>
				</div>
			</div>
			<!-- size -->
			<div class='col-9 mt-3'>
				<label>Size</label>
				<div class='radio-container'>
					<input <?php if($size=="Toy")echo "checked=''";?>   id='toy' name='size' type='radio' value='Toy'>
					<label for='toy'>toy</label>
					<input <?php if($size=="Small")echo "checked=''";?> id='small' name='size' type='radio' value='Small'>
					<label for='small'>small</label>
					<input <?php if($size=="Standard")echo "checked=''";?>  id='standard' name='size' type='radio' value='Standard'>
					<label for='standard'>standard</label>
					<input <?php if($size=="Large")echo "checked=''";?>  id='large' name='size' type='radio' value='Large'>
					<label for='large'>large</label>
					<input <?php if($size=="Giant")echo "checked=''";?>  id='giant' name='size' type='radio' value='Giant'>
					<label for='giant'>giant</label>
				</div>
			</div>
			<div class="col-sm-6 mt-1">
				<label>Age: </label>
				<select class="custom-select w-50" name="age" id="age">	  
					<option value="One" <?php if($age=="One")echo "selected";?> >one</option>
					<option value="Two" <?php if($age=="Two")echo "selected";?>>two</option>
					<option value="Three" <?php if($age=="Three")echo "selected";?>>three</option>
					<option value="Four" <?php if($age=="Four")echo "selected";?>>four</option>
					<option value="Five +" <?php if($age=="Five")echo "selected";?>>five +</option>
				</select>
			  </div>
			  <?php  if($DogId)echo '<input type="hidden" name="DogId" value='.$DogId.'>' ?>
			  <input type="hidden" name="UserId" value="<?php echo $UserId;?>">
			  <input type="hidden" name="State" value="Set">
			<section>
				<button class="p-2 float-right mt-5">Save</button>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="./js/constructValidation.js"></script>
  <script src="js/app.js"></script>
</body>
</html>
