<?php
$whatUpdate=$_POST['fildToUpdateHidd'];
$valueUpdate=$_POST['fildToUpdate'];
$idFild=$_POST['idAnunt'];

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'web');

$sql = "UPDATE dogs SET $whatUpdate='$valueUpdate' WHERE ID='$idFild'";

 if (mysqli_query($con, $sql)) {
      mysqli_close($con);
      header('Location:adminDeleteAnouncement.php?rez=succes');
 } else {
   echo mysqli_error($con);
   mysqli_close($con);
   //header('Location:adminDeleteAnouncement.php?rez=error');
 }

?>
