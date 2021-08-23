<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'machiaje');

 $tabel = $_POST['typeProductID1'];
$product=$_POST['textProductID'];

 $sql = "DELETE FROM $tabel WHERE nume='$product'";
 if (mysqli_query($con, $sql)) {
      mysqli_close($con);
      header('Location:adminPage.php?rez=succes');
 } else {
  //  echo mysqli_error($con);
   mysqli_close($con);
  header('Location:adminPage.php?rez=error');
 }

?>
