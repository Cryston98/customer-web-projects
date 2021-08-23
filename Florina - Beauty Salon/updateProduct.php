<?php


$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'machiaje');

$tabel = $_POST['typeProductID'];
$pret = $_POST['priceProductID'];
$cantitate = $_POST['cantityProductID'];
$product=$_POST['textProductID1'];

$sql = "UPDATE $tabel SET pret='$pret',cantitate='$cantitate' WHERE nume='$product'";

 if (mysqli_query($con, $sql)) {
      mysqli_close($con);
      header('Location:adminPage.php?rez=succes');
 } else {
  echo mysqli_error($con);
   mysqli_close($con);
  //header('Location:adminPage.php?rez=error');
 }


?>
