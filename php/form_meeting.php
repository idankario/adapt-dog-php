<?php
  //Checke if state is in post or get or just put null value
  $State_set=$_POST["State"]?? null;
  $id_meeting=$_GET["id"]?? null;   
  if(!$UserId)
    header('signIn_signUp.php');  
  if($State||$State_set){  
    if($State=='Delete'&&$id_meeting)
      $query = "DELETE FROM Adopter_list_220 WHERE id='$id_meeting'";
    elseif($State=='Complete'&&$id_meeting)
      $query = "Update Adopter_list_220 SET status_meeting='Complete' WHERE id='$id_meeting'";
    elseif($State=='Cancel'&&$id_meeting)
      $query = "Update Adopter_list_220 SET status_meeting='Cancel' WHERE id='$id_meeting'";
    else{
      $Date= $_POST["Date"]?? null;
      $Time=$_POST["Time"]?? null;
      $price=$_POST["price"]?? null;
      $DogId=$_POST["DogId"]?? null;
      if($Date&&$Time&&$price&&$UserId&&$DogId){ 
        $newDate = date("Y-m-d", strtotime($Date));
        if($id_meeting)
          $query = "Update Adopter_list_220 set 
                    dog_id='$DogId', date_meeting='$newDate', time_meeting='$Time', price='$price' where id='$id_meeting'";
        else
          $query= "insert into Adopter_list_220(user_id,dog_id,date_meeting,time_meeting,price)
                values('$UserId',' $DogId','$newDate','$Time','$price')";
      }
    }
    $result = mysqli_query($connection, $query);
    if(!$result) 
      die("DB query failed");
    header('Location: meeting.php'); 
    }else{
    $DogId=$_GET["DogId"]?? null;
    if($DogId){
      $Date=$_GET["date_meeting"]?? date("d-m-20y", strtotime("+2 day"));
      $Time=$_GET["time_meeting"]?? "08:00";
      $query 	= "SELECT * FROM dogs_220 where dog_id=".$DogId;
      $result = mysqli_query($connection, $query);		
      if($result) {
        $row 	= mysqli_fetch_assoc($result);//there is only 1 with id=X
      }
    }
    else{
      header('Location: adoptDog.php'); 
    }
    $name= $row['dog_name'];
}

?>