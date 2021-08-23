<?php
include "function/configLanguage.php";
include "language.php";

echo '
      <html>
          <head>
              <title >'.$lang[$language]["title"].'</title>
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="css/style.css" />
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
             <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
          </head>
      <body>
        <div id="navigare">
            <ul>
                <a href="home.php"><li>'.$lang[$language]["back"].'</li></a>
            </ul>
            <div id="rightNav">
                <a href="cos.php"><i class="fas fa-cart-plus"></i> '.$lang[$language]["cart"].'</a>
            </div>
        </div>
        <div id="fataWrap">';
          include 'function/selectOchiDB.php';
  echo  '</div>
        <script src="js/app.js"></script>
        <body>
<html>';
