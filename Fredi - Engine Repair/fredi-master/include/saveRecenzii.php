<?php
 include("db_connect.php");
 
 if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $myuser = mysqli_real_escape_string($db,$_POST['usernameMyRecenzie']);
    $myrating = mysqli_real_escape_string($db,$_POST['ratingMyRecenzie']);
    $mytext = mysqli_real_escape_string($db,$_POST['textMyRecenzie']); 


        $sql = "INSERT INTO db_recenzii (USERNAME,RATING,TEXT) VALUES ('$myuser', '$myrating', '$mytext')";
        $result=mysqli_query($db,$sql);
        if($result==1)
        {
            mysqli_close($db);
            header('Location:../pages/recenzii.php?rez=succes');
        }
        else
        {
            header('Location:../pages/recenzii.php?rez=error&?msg='.mysqli_error($db));
        }
    }

?>