<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con,'machiaje');

 $sql = "SELECT * FROM ochi";
 $result = mysqli_query($con,$sql);

 if (mysqli_num_rows($result) > 0) {
    $contor=0;
    echo "
    <div class='table'>
        <div class='row header green'>
            <div class='cell'>ID</div>
            <div class='cell'>Nume</div>
            <div class='cell'>Pret</div>
            <div class='cell'>Cantitate</div>
            <div class='cell dell' >Control</div>
        </div>";
        $i=1;
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<div class="row">
                        <div class="cell">'.$i.'</div>
                        <div class="cell">'.$row['nume'].'</div>
                        <div class="cell">'.$row['pret'].'</div>
                        <div class="cell">'.$row['cantitate'].'</div>
                        <div class="cell dell"><button onclick="confirmEdit(\''.$row['nume'].'\',\''.$row['pret'].'\',\''.$row['cantitate'].'\',\'ochi\')" title="Edit Product" id="editProduct"><i class="far fa-edit"></i></button><button onclick="confirmDelete(\''.$row['nume'].'\',\'ochi\')" title="Delete Product" id="deleteProduct"><i class="far fa-trash-alt"></i></button></div>

                  </div>';
                  $i++;
        }

echo "</div>";
} else {
    echo "Nu exista comenzi";
}

$sql = "SELECT * FROM buze";
$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result) > 0) {
     $contor=0;
   echo "
   <div class='table'>
       <div class='row header green'>
           <div class='cell'>ID</div>
           <div class='cell'>Nume</div>
           <div class='cell'>Pret</div>
           <div class='cell'>Cantitate</div>
           <div class='cell dell' >Control</div>
       </div>";
       $i=1;
       while($row = mysqli_fetch_assoc($result))
       {
           echo '<div class="row">
                       <div class="cell">'.$i.'</div>
                       <div class="cell">'.$row['nume'].'</div>
                       <div class="cell">'.$row['pret'].'</div>
                       <div class="cell">'.$row['cantitate'].'</div>
                       <div class="cell dell"><button onclick="confirmEdit(\''.$row['nume'].'\',\''.$row['pret'].'\',\''.$row['cantitate'].'\',\'buze\')" title="Edit Product" id="editProduct"><i class="far fa-edit"></i></button><button onclick="confirmDelete(\''.$row['nume'].'\',\'buze\')" title="Delete Product" id="deleteProduct"><i class="far fa-trash-alt"></i></button></div>

                 </div>';
                 $i++;
       }

echo "</div>";
}

$sql = "SELECT * FROM fata";
$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result) > 0) {
   $contor=0;
   echo "
   <div class='table'>
       <div class='row header green'>
           <div class='cell'>ID</div>
           <div class='cell'>Nume</div>
           <div class='cell'>Pret</div>
           <div class='cell'>Cantitate</div>
           <div class='cell dell' >Control</div>
       </div>";
       $i=1;
       while($row = mysqli_fetch_assoc($result))
       {
           echo '<div class="row">
                       <div class="cell">'.$i.'</div>
                       <div class="cell">'.$row['nume'].'</div>
                       <div class="cell">'.$row['pret'].'</div>
                       <div class="cell">'.$row['cantitate'].'</div>
                       <div class="cell dell"><button onclick="confirmEdit(\''.$row['nume'].'\',\''.$row['pret'].'\',\''.$row['cantitate'].'\',\'fata\')" title="Edit Product" id="editProduct"><i class="far fa-edit"></i></button><button onclick="confirmDelete(\''.$row['nume'].'\',\'fata\')" title="Delete Product" id="deleteProduct"><i class="far fa-trash-alt"></i></button></div>

                 </div>';
                 $i++;
       }

echo "</div>";
}

mysqli_close($con);
 ?>
