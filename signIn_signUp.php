<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="images/adopt.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">	
    <link rel = "stylesheet" href="css/style.css">
    <title>Sign in & Sign up Form</title>
  </head>
  <?php
    include 'php/connection.php';
    include 'php/login.php';
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
      <div id="profile">
        <a href="#">
          <img src="images/user_image/profile.jpg" alt="profile" title="profile" class="pt-2 rounded-circle">
        </a>
      </div>  
      <div class="collapse navbar-collapse navIcon"  id="navbarText" >
        <a  href="index.php"><i></i> Our Home</a>
        <a href="adoptDog.php"><i></i>Adopt Me</a>
        <a href="#"><i></i>Donate Us</a>
      </div> 
    </nav>
  <div class="container1">
    <div class="signin-signup">
      <form action="#" method="post" class="sign-in">
        <h2 >Sign in</h2>
        <div class="input-field">
          <i class="fas fa-user"></i>
          <input name="loginMail" type="text" placeholder="Mail" />
        </div>
        <div class="input-field">
          <i class="fas fa-lock"></i>
          <input name="loginPass" type="password" placeholder="Password" />
        </div>
        <div>
          <p><?php if(isset($message)) { echo $message; } ?></p>
        </div>   
        <input type="submit" value="Login" class="px-4 py-2 btn btn-primary rounded-pill" />
      </form>
      <form action="#" method="post" class="sign-up invisible d-none requires-validation">
        <h2 >Sign up</h2>
        <div class="input-field d-lg-flex">
          <i class="fas fa-user"></i>
          <input type="text" name="username"  placeholder="User Name" required/>
          <p class="invalid-feedback">Only two words with one space</p>
				  <p class="valid-feedback">Looks good!</p>
        </div>
        <div class="input-field d-lg-flex">
          <i class="fas fa-envelope"></i>  
          <input type="email" name="email"  placeholder="Email" required/>
        </div>
        <div class="input-field d-lg-flex">
          <i class="fas fa-lock"></i> 
          <input type="password" name="password" placeholder="Password" required/>
          <p class="invalid-feedback">Password length 8 char one num and char</p>
				  <p class="valid-feedback">Looks good!</p>
        </div> 
        <div class="input-field d-lg-flex">
          <i class="fas fa-phone"></i> 
          <input type="tel" name="phone" placeholder="Phone Number"/>
        </div>
        <input type="submit" class="px-4 py-2 btn btn-primary rounded-pill" value="Sign up" />
      </form>
    </div>
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content ">
          <h3>New here ?</h3>
          <p>
            <i>YOU BE BORN WITH THE ABILITY TO CHANGE SOMEONE'S LIFE DON'T EVER WANT IT</i>
          </p>
          <button class="px-4 py-2 transparent rounded-pill" id="sign-up-btn">Sign up</button>
        </div>
        <img src="images/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel invisible">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            <i>WHO SAYS YOUR SOULMATE HAS TO HAVE TWO LEGS</i>
          </p>
          <button class="px-4 py-2 transparent rounded-pill" id="sign-in-btn">Sign in</button>
        </div>
        <img src="images/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>
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
    <script src="js/swithcSignInSignOut.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js"></script>
    <script src="./js/constructValidation.js"></script>
  </body>
</html>
