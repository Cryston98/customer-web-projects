<?php


include "config.php";

mysqli_select_db($connect,'machiaje');
$_SESSION['produse']=0;

$sql="SELECT * FROM ochi";
$result=mysqli_query($connect,$sql) or die("Failed to connect");
$cnt=0;
if(mysqli_num_rows($result)>0)
{
        while($row=mysqli_fetch_array($result))
        {
            $_SESSION['produs'][$cnt]=$row['nume'];
            $_SESSION['cantitate'][$cnt]=$row['cantitate'];

            $_SESSION['pret'][$row['nume']]=$row['pret'];
            $_SESSION['img'][$row['nume']]=$row['img'];

            $_SESSION['produse']++;
            $cnt++;
        }
}

$sql="SELECT * FROM fata";
$result=mysqli_query($connect,$sql) or die("Failed to connect");
if(mysqli_num_rows($result)>0)
{
        while($row=mysqli_fetch_array($result))
        {
          $_SESSION['produs'][$cnt]=$row['nume'];
          $_SESSION['cantitate'][$cnt]=$row['cantitate'];

          $_SESSION['pret'][$row['nume']]=$row['pret'];
          $_SESSION['img'][$row['nume']]=$row['img'];

          $_SESSION['produse']++;
          $cnt++;
        }
}

$sql="SELECT * FROM buze";
$result=mysqli_query($connect,$sql) or die("Failed to connect");
if(mysqli_num_rows($result)>0)
{
        while($row=mysqli_fetch_array($result))
        {
          $_SESSION['produs'][$cnt]=$row['nume'];
          $_SESSION['cantitate'][$cnt]=$row['cantitate'];

          $_SESSION['pret'][$row['nume']]=$row['pret'];
          $_SESSION['img'][$row['nume']]=$row['img'];

          $_SESSION['produse']++;
          $cnt++;
        }
}


for($i=0;$i<=$_SESSION['produse'];$i++)
{
}


?>
