<?php

include("db_connect.php");

if($_SERVER["REQUEST_METHOD"]=="POST") 
{
   $idServici = mysqli_real_escape_string($db,$_POST['idServiceToDelete']);
   $sql = "DELETE FROM db_servicii WHERE id='$idServici'";
   if (mysqli_query($db, $sql)) {
        echo "Record deleted successfully";
        header('Location:../pages/panouControlAdmin.php?rez=succes');
   } else {
    header('Location:../pages/panouControlAdmin.php?rez=error');
   }
}
header('Location:../pages/panouControlAdmin.php?rez=error');
mysqli_close($db);
?>