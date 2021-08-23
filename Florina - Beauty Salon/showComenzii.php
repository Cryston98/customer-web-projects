<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con,'machiaje');

 $sql = "SELECT * FROM comenzii";
 $result = mysqli_query($con,$sql);

 if (mysqli_num_rows($result) > 0) {
    $contor=0;
    echo "
    <div class='table'>
        <div class='row header green'>
            <div class='cell'>ID</div>
            <div class='cell'>Nume</div>
            <div class='cell'>Adresa</div>
            <div class='cell'>Produse</div>
            <div class='cell dell'>Pret</div>
            <div class='cell'>Telefon</div>
        </div>";
        $i=1;
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<div class="row">
                        <div class="cell">'.$i.'</div>
                        <div class="cell">'.$row['Nume'].'</div>
                        <div class="cell">'.$row['Adresa'].'</div>
                        <div class="cell">'.$row['Produse'].'</div>
                        <div class="cell dell">'.$row['Pret'].'</div>
                        <div class="cell dell">0'.$row['Telefon'].'</div>
                  </div>';
                  $i++;
        }
echo "</div>";
} else {
    echo "Nu exista comenzi";
}

mysqli_close($con);
 ?>
