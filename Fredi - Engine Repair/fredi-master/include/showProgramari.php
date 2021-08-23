<?php
 //include("db_connect.php");
 $sql = "SELECT * FROM db_programari";
 $result = mysqli_query($db,$sql);

 if (mysqli_num_rows($result) > 0) {
    $contor=0;
    echo "
    <div class='table'>
        <div class='row header green'>
            <div class='cell'>ID</div>  
            <div class='cell'>Servicii</div>
            <div class='cell'>Utilizator</div>
            <div class='cell dell'>Data</div>
        </div>";

        while($row = mysqli_fetch_assoc($result)) 
        {
            echo '<div class="row">
                        <div class="cell">'.$row['ID'].'</div>
                        <div class="cell">'.$row['ID_SERVICII'].'</div>
                        <div class="cell">'.$row['ID_UTILIZATOR'].'</div>
                        <div class="cell">'.$row['DATA'].'</div>
                    </div>';
        }
echo "</div>";
} else {
    echo "0 servicii";
}

mysqli_close($db);
 ?>