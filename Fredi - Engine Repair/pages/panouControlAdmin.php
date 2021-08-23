<?php
include "../include/session.php";
//test admin is loged
if(isset($_SESSION['login_user_isAdmin']) && $_SESSION['login_user_isAdmin']==1){
    
  include "../include/adminPage.php";

}else{
    header("location: ../index.php");
}

?>