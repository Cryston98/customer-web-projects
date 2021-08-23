<?php

session_start();


for($i=0;$i<=$_SESSION[$user]['cntCos'];$i++)
{
    if(strcmp($_GET['produs'],$_SESSION[$user]['listaProduse'])==0)
    {
        
        $_SESSION['listaProduse']--;
    }
}
=0;




?>