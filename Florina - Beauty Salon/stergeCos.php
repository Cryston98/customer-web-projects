<?php
session_start();
$user=$_SESSION['username'];

for ($i=0; $i < $_SESSION[$user]['cntCos']; $i++) {
  unset($_SESSION[$user]['listaProduse'][$i]);
}
unset($_SESSION['old']);
$_SESSION[$user]['cntCos']=0;
header("Location:cos.php?del=succes");
?>
