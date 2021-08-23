<?php

//include('db_connect.php');
 $sql = "SELECT * FROM db_programari";
 $result = mysqli_query($db,$sql);

 if (mysqli_num_rows($result) > 0) {
    $contorZileOcupate=0;
    $vectorZileOcupate=array();
    while($row = mysqli_fetch_assoc($result)) 
    {
      $vectorZileOcupate[$contorZileOcupate]=$row['DATA'];
      $contorZileOcupate++;
    }
} else {
    //echo "0 results";
}

function verifData($dataCurenta,$vectorZileOcupate,$lenVector) {
   
    for($i=0;$i<$lenVector;$i++)
    {
        if($dataCurenta==$vectorZileOcupate[$i])
         return true;
    }
    return false;
}
/*
for($i=1;$i<$contorZileOcupate;$i++)
   echo $vectorZileOcupate[$i]."<br>"
*/

 ?>