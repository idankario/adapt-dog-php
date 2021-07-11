<?php
	if($UserRole!='Admin')
        header('Location: signIn_signUp.php'); 
    //Checke if state is in post or get or just put null value
    $State=$_GET["State"]?? null;
    $State_set=$_POST["State"]?? null;
    if($State||$State_set){    
        if($State=='Delete'&&$DogId){
            $query = "DELETE FROM dogs_220 WHERE dog_id='$DogId'";
            $result = mysqli_query($connection, $query);
            if(!$result) 
                die("DB query failed to delete");
            header('Location: adoptDog.php'); 
        }
        $dog_name= $_POST["dog_name"]?? null;
        $gender=$_POST["gender"]?? null;
        $age=$_POST["age"]?? null;
        $size=$_POST["size"]?? null;
        $dog_type=$_POST["dog_type"]?? null;
        if($dog_name&&$gender&&$age&&$size&&$dog_type){
            if($DogId)
                $query = "Update dogs_220 set dog_name='$dog_name', gender='$gender', age='$age', size='$size', dog_type='$dog_type' where dog_id='$DogId'";
            else															
                $query ="insert into dogs_220(dog_name,gender,age,size,dog_type)values('$dog_name','$gender','$age','$size','$dog_type')";
            $result = mysqli_query($connection, $query);
            if(!$result) 
                die("DB query failed1");
            header('Location: adoptDog.php'); 	
        }
    }else{
        if($DogId){
			$query = "SELECT * FROM dogs_220 where dog_id=".$DogId;
			// echo $query;
			$result = mysqli_query($connection, $query);
			if($result) {
				$row = mysqli_fetch_assoc($result); //there is only 1 item with id=X
				$State='Update';
			}
			else die("DB query failed.");
		}
        $dog_name= $row["dog_name"]?? "";
        $gender=$row["gender"]?? "Male";
        $age=$row["age"]?? "One";
        $size=$row["size"]?? "Toy";
        $dog_type=$row["dog_type"]?? "";
    }
?>
    