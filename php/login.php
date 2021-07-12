<?php
  $password = $_POST["loginPass"]?? null;
  $email = $_POST["loginMail"]?? null;
  if(!empty($email&&$password)) { // true if form was submitted
      $query  = "SELECT * FROM users_220 WHERE email='" 
              . $email
              . "' and pass = '"
              . $password
              ."'";
    
      $result = mysqli_query($connection , $query);
      //To get all details to session 
      $row    = mysqli_fetch_array($result);
      if(($row)) {
        $_SESSION["user_id"] = $row["user_id"];
        $_SESSION["user_role"] = $row["user_role"];
        $_SESSION["image"] = $row["image"];
        $_SESSION["user_name"] = $row["name"];
        header('Location: index.php'); 
      } else {
          $message = "Invalid username or password !";
      }
  }
  else
  {
    $username=$_POST["username"]?? null;
    $phone=$_POST["phone"]?? null;
    $password = $_POST["password"]?? null;
    $email = $_POST["email"]?? null;
    if(!empty($password&&$email&&$username)) { // true if form was submitted
      $email=$_POST["email"];
      $query  =  "SELECT * FROM users_220 WHERE email='".$email;
      $result = mysqli_query($connection , $query);
      if(!empty($result)) {
        $message = "User alredy exsist";
      }else{
        $message = "";
        $query  =  "insert into users_220(email,pass,name,phone)values('$email',' $password','$username','$phone')";
        $result = mysqli_query($connection , $query);
      }
    }
    }
    ?>