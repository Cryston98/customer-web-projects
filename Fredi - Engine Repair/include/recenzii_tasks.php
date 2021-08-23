<?php
 //include("db_connect.php");
 $sql = "SELECT * FROM db_recenzii";
 $result = mysqli_query($db,$sql);

 if (mysqli_num_rows($result) > 0) {
    $contor=0;
    while($row = mysqli_fetch_assoc($result)) 
    {
      echo "<div id='recenzia'.$contor>";
        echo "<div class='photoRecenzii'></div>";

        echo "<div class='wrap-recenzii'>
                <div class='username-recenzii'>".$row['USERNAME']."</div>
                <div class='rating-recenzii'>";

            for($i=1;$i<=5;$i++)
            {
                if($i<=$row['RATING'])
                {
                 echo "<i class='colorStars fas fa-star'></i>";
                }else
                {
                  echo "<i class='fas fa-star'></i>";
                }
            }
                
         echo  "</div>
              </div>";

        echo "<div class='textRating'>".$row['TEXT']."</div>";

      echo "</div>";
      $contor++; 
    }
} else {
    echo "0 results";
}

mysqli_close($db);
 ?>