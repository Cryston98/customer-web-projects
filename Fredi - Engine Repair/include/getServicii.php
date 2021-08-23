<?php
// include("db_connect.php");
 $sql = "SELECT * FROM db_servicii";
 $result = mysqli_query($db,$sql);

 if (mysqli_num_rows($result) > 0) {
    $contor=0;
    while($row = mysqli_fetch_assoc($result)) 
    {
      echo "<p>".$row['SERVICIU']." - Pret : ".$row['PRET']."</p><input type='checkbox' name='services[]' class='serviciiProgramri' value='".$row["ID"]."'><br>";            
    }
} else {
    echo "Momentan nu sunt servicii disponinile";
}
mysqli_close($db);
 ?>