<?php

//Config database
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');

$connect=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
if(!$connect)
{
    die("Connection failed".mysqli_connect_error());
}



?>
