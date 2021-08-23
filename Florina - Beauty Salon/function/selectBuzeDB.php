<?php

include "config.php";






mysqli_select_db($connect,'machiaje');
$sql="SELECT * FROM buze";

if($result=mysqli_query($connect,$sql))
{
    if(mysqli_num_rows($result)>0)
    {
        
       $counterOfProducts=mysqli_num_rows($result);
       $i=0;$j=0;
       $productsOnLine=4;

        while($row=mysqli_fetch_array($result))
        {
            if($i==0||$i==$productsOnLine*$j){
                echo '<div class="wrap-products">';
                $j++;
            }
           
                echo '<div class="item-shop">
                        <img id="item-img" src="img/produse/'.$row['img'].'"/>
                        <h3>'.$row['nume'].'</h3>
                        <p>'.$row['pret'].'</p>
                        <button onclick="cumpara(\''.$row['nume'].'\')" id="addBuy">Cumpara</button>
                    </div>';
                if($i==$productsOnLine*$j-1){
                    echo '</div>'; 
                }
           $i++;
        }
        if($counterOfProducts<$productsOnLine)
        {
            echo '</div>'; 
        }
    }
}