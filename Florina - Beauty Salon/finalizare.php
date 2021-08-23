<link rel="stylesheet" href="css/style.css" />
<?php
session_start();
include "function/config.php";
$user=$_SESSION['username'];

for ($i=0; $i < $_SESSION[$user]['cntCos']; $i++) {
  unset($_SESSION[$user]['listaProduse'][$i]);

}
$_SESSION['old']="";
unset($_SESSION[$user]['cntCos']);
$_SESSION[$user]['cntCos']=0;


$judet=$_POST['judet'];
$oras=$_POST['oras'];
$strada=$_POST['strada'];
$telefon=$_POST['telefon'];
$produse=$_POST['produse'];
$pret=$_POST['pret'];


$adresa="Judet:".$judet." Oras:".$oras." Str:".$strada;

mysqli_select_db($connect,'machiaje');
$SQL="INSERT INTO comenzii (Nume,Adresa,Produse,Pret,Telefon) VALUES ('$user','$adresa','$produse','$pret','$telefon')";
$result=mysqli_query($connect,$SQL);
if ($result) {
  mysqli_close($connect);
  $msg="Multumim pentru comanda!";
}else {
  $msg="Comanda invalida";
  mysqli_close($connect);
}


echo "<h3 id='msgF'>$msg</h4>";
header("refresh:3;url=home.php");
?>
