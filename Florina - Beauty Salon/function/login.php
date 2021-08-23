<?php

include "config.php";
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

mysqli_select_db($connect,'machiaje');

$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
$result=mysqli_query($connect,$sql) or die("Failed to connect");

$row=mysqli_fetch_array($result);
if($row['username']==$username && $row['password']==$password){
    $_SESSION['username']=$row['username'];
    $_SESSION['isAdmin']=$row['isAdmin'];
    $_SESSION['email']=$row['email'];
    mysqli_close($connect);
    header('Location:../home.php?result=succes');
}else{
    mysqli_close($connect);
    header('Location:../home.php?result=error');
}


?>