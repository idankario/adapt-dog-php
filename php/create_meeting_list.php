<?php
    if($UserId)
    { 
        $isAdmin=0;
        if(("Admin"==$UserRole))
            $isAdmin=1;
        $query = "SELECT al.id as id,al.price as price,DATE_FORMAT(al.date_meeting, '%m-%d-%Y') as datemeeting ,
                al.time_meeting as time_meeting,
                d.dog_name as dog_name,d.gender as gender,d.image_big as img,d.size as size,
                d.dog_type as dog_type,d.age as age,d.dog_id as dog_id,u.name as user_name,
                u.email as email,u.phone as phone
                FROM Adopter_list_220  al
                INNER JOIN dogs_220 d ON d.dog_id = al.dog_id  
                INNER JOIN users_220 u ON u.user_id = al.user_id          
                where al.user_id=".$UserId." OR ".$isAdmin." AND al.status_meeting='process'
                ORDER BY time_meeting , datemeeting DESC";
        $meeting = mysqli_query($connection, $query);
        if(!($meeting)) 
            die("DB query failed.");
        if (mysqli_num_rows($meeting)==0)
            header('Location: adopt_meeting.php'); 
    }else{
        header('Location: signIn_signUp.php'); 
    }
    $query = "SELECT * FROM users_220 where user_id=".$UserId;
    $result = mysqli_query($connection, $query);
    if($result) {
        $user = mysqli_fetch_assoc($result); //there is only 1 item with id=X
    }
    else die("DB query failed.");

?>