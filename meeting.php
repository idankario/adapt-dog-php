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
		include 'php/create_meeting_list.php';
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
			<?php  if($navUser)echo'<a href="#" id="currentWeb"><i></i>Meeting Pet</a>';?>
			<?php echo $navAdmin;?>
		</div> 
  	</nav>
    <!-- main -->
    <main class="flex-center ">
		<?php
			echo'<h1 class="mb-5">Hello '.$user['name'].'</h1>';
		?>	
        <article class="d-flex flex-center align-items-center flex-row flex-wrap">		
		<?php	
		
            foreach ($meeting as $key => $row) {
                $name= $row['dog_name']??null;
				$detalis=null;
				$phnoe="";
				if($row['phone'])
					$phnoe='<p>phone: '.$row['phone'].'</p>';
				if($isAdmin)
					$detalis='<h5 >Meeting with: '.$row['user_name'].'</h5>
					<p>email: '.$row['email'].'</p>'
					.$phnoe;	
            echo'<article class="d-inline flex-center align-items-center text-center text-dark m-3">'.$detalis.'
					<div class="d-flex flex-wrap ">
						<img alt="'.$name.'" title="'.$name.'" src="'.$row['img'].'">
						<div class="text-c">
							<p> Gender:'.$row['gender'].'</p>
							<p>Size: '.$row['size'].'</p> 
							<p>Type: '. $row["dog_type"] .'</p>
							<p>Age: '.$row['age'].'</p>
							<p>In date: '.$row['datemeeting'].'</p>
							<p>At time: '.(date('g:ia', strtotime($row['time_meeting']))).'</p>
						</div>
					</div>
					<div class="w-75 m-3 text-center">';
						if($UserRole=='Admin')
							echo'<button onclick=location.href="adopt_meeting.php?State=Complete&id='.$row['id'].'" type="button"><i class="fas fa-pen"></i>Complete</button>
							<button onclick=location.href="adopt_meeting.php?State=Cancel&id='.$row['id'].'" type="button"><i class="fas fa-pen"></i>Cancel</button>';
						else
							echo'<button onclick=location.href="adopt_meeting.php?DogId='.$row['dog_id'].'&id='.$row['id'].'&date_meeting='.$row['datemeeting'].'&time_meeting='.$row['time_meeting'].'" class="m-2" type="button"><i class="fas fa-pen"></i> Edit</button>
							<button onclick=location.href="adopt_meeting.php?State=Delete&id='.$row['id'].'" type="button"><i class="far fa-trash-alt"></i> Delete</button>';
						
						echo'</div>
            	</article>';
            }	
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