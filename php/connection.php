<?php
	$connection = mysqli_connect("182.50.133.173", "studDB21a", "stud21DB1!", "studDB21a");
	session_start();
	//testing connection success
	if(mysqli_connect_errno()) {
		die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
	}	
	$UserRole=$_SESSION["user_role"]?? null;
	$UserImage=$_SESSION["image"]?? "profile.jpg";
	$UserImage="images/user_image/".$UserImage;
	$UserId = $_SESSION["user_id"]?? null;
	$DogId = $_GET["DogId"]?? null;
	$State = $_GET["State"]?? null;
	$user_name = $_SESSION["user_name"]?? null;
	$navAdmin= null;
	$navUser= null;
	if($UserId)
	{
		$profile_nav=
		'<div id="profile"class="dropdown mt-3 ">
        	<a href="#" class="dropdown-toggle"  data-bs-toggle="dropdown" aria-expanded="false">
        		<img src='.$UserImage.' alt="'.$user_name.'" title="'.$user_name.'" class="rounded-circle">
        	</a>
			<ul  class="dropdown-menu" aria-labelledby="navbarDropdown">
				<li><a class="dropdown-item" href="#">Edit</a></li>
				<li><a class="dropdown-item" href="logout.php">Logout</a></li>
			</ul>
      	</div>';
		if($UserRole=='Admin')
			$navAdmin='<a href="createNewPet.php"><i></i>Add Pet</a>';
		$navUser='<a href="meeting.php"><i></i>Meeting Pet</a>';
	}else
		$profile_nav=
		'<div id="profile">
			<a href="signIn_signUp.php" >
				<img src='.$UserImage.' alt="profile" title="profile" class="pt-2 rounded-circle">
			</a>
		</div>';
?>