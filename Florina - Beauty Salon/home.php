<?php

 include "function/configLanguage.php";
 include "language.php";

 if(isset($_SESSION['username']))
 {
   echo '

<!DOCTYPE html>
<html lang="en">
	<head>
		<title >My shop</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css" />
	</head>
	<body>

				<nav>
					<selection>
						<div class="hero">
							<h4>'.$lang[$language]["home"].'</h4>
              <div id="lang">
                <h5><a href="home.php?local=en">English</a></h5>
                <h5><a href="home.php?local=ro">Romana</a></h5>
              </div>  
							<h1 class="headline">'.$lang[$language]["title"].'</h1>
						</div>
					</selection>
				</nav>


				<div id="mySidenav" class="sidenav">
            <a href="ochi.php" id="ochi">'.$lang[$language]["eyes"].'</a>
            <a href="buze.php" id="buze">'.$lang[$language]["lips"].'</a>
            <a href="fata.php" id="fata">'.$lang[$language]["face"].'</a>
            <a href="function/logout.php" id="logOut">LogOut</a>';
             if ($_SESSION['isAdmin']==1 && isset($_SESSION['isAdmin']))
                echo '<a href="adminPage.php" id="adminBTN">Admin</a>';
  echo  '</div>



      <div class="slideshow-container">
            <div class="mySlides fade">
              <img src="img/ii.jpeg" style="width:100%" >
              <div class="headline">'.$lang[$language]["title"].'</div>
            </div>
            <div class="mySlides fade">
              <img src="img/beauty.jpg" style="width:100%">
              <div class="headline">'.$lang[$language]["title"].'</div>
            </div>
            <div class="mySlides fade">
              <img src="img/makeup.jpg" style="width:100%">
              <div class="headline">'.$lang[$language]["title"].'</div>
            </div>
      </div>

<br>
    <div style="text-align:center">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>

	</body>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
  <!--<script src="<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"-->
	<script src="js/app.js"></script>

</html>';
}else{
    header('Location:index.php');
  }
 ?>
