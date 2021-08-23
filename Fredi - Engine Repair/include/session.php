<?php
   include('db_connect.php');
   session_start();
   if(isset($_SESSION['login_user'])){
    $user_check = $_SESSION['login_user'];
  }else{
    $user_check ="empty";
  }
   
   $ses_sql = mysqli_query($db,"select USERNAME from db_login where EMAIL = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['USERNAME'];   
  
?>
