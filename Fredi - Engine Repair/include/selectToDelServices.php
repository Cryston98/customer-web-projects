<?php
 //include("db_connect.php");
 $sql = "SELECT * FROM db_servicii";
 $result = mysqli_query($db,$sql);

 if (mysqli_num_rows($result) > 0) {
    $contor=0;
    echo "
    <div class='table'>
        <div class='row header green'>
            <div class='cell'>ID</div>  
            <div class='cell'>Serviciu</div>
            <div class='cell'>Pret</div>
            <div class='cell dell'>Select</div>
        </div>";

        while($row = mysqli_fetch_assoc($result)) 
        {
            echo '<div class="row">
                        <div class="cell">'.$row['ID'].'</div>
                        <div class="cell">'.$row['SERVICIU'].'</div>
                        <div class="cell">'.$row['PRET'].'</div>
                        <div class="cell dell">
                            <form action="../include/deleteService.php" method="POST">
                                <input type="hidden" name="idServiceToDelete" id="idServiceToDelete" value="'.$row['ID'].'"/>
                                <button id="btnDell"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </div>';
        }
echo "</div>";
} else {
    echo "0 servicii";
}

 ?>