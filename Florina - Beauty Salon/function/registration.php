<?php
session_start();
include "config.php";




$username=$_POST['username'];
$nume=$_POST['nume'];
$prenume=$_POST['prenume'];
$email=$_POST['email'];
$parola=$_POST['parola'];

mysqli_select_db($connect,'machiaje');
$SQL="INSERT INTO users (username,nume,prenume,email,password,isAdmin) VALUES ('$username','$nume','$prenume','$email','$parola','0')";
$result=mysqli_query($connect,$SQL);
if ($result) {
  mysqli_close($connect);
  $_SESSION['username']=$username;
  $_SESSION['isAdmin']=0;
  $_SESSION['email']=$email;
  header('Location:../home.php?result=succes');
}else {
  $msg="Erore".mysqli_error($connect);
  mysqli_close($connect);
  header('Location:../home.php?result=error');
}
?>
