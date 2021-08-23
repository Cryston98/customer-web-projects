<?php
 include("db_connect.php");
 
 if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $myuser = mysqli_real_escape_string($db,$_POST['user_name']);
    $myemail = mysqli_real_escape_string($db,$_POST['email_reg']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password_reg']); 

    $sql = "SELECT id FROM db_login WHERE EMAIL = '$myemail'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count > 0) {
    
       header("location: ../index.php?result=EmailAlreadyExisted!");
    }else {

        $sql = "INSERT INTO db_login (USERNAME,EMAIL,PASSWORD,isAdmin) VALUES ('$myuser', '$myemail', '$mypassword','0')";
        $result=mysqli_query($db,$sql);
        if($result==1)
        {
            mysqli_close($db);
            header('Location:../index.php?rez=succes');
        }
        else
        {
            header('Location:../index.php?rez=error&?msg='.mysqli_error($db));
        }
    }
}
?>