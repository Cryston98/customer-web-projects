<?php
include "function/configLanguage.php";
include "language.php";

echo '<!DOCTYPE html>
			<html lang="en">
				<head>
					<title >'.$lang[$language]["title"].'</title>
			    <meta name="viewport" content="width=device-width, initial-scale=1">
			    <link rel="stylesheet" href="css/style.css" />
				</head>
				<body>

				<nav>
					<selection>
						<div class="hero">
							<h1 class="headline">'.$lang[$language]["title"].'</h1>
							<div id="lang">
								<h5><a href="home.php?local=en">English</a></h5>
								<h5><a href="home.php?local=ro">Romana</a></h5>
							</div>  
						</div>
					</selection>
				</nav>


				<div id="mySidenav" class="sidenav">

          <a href="#" onclick="showPopUp(2)" id="logare">'.$lang[$language]["registration"].'</a>
          <a href="#" onclick="showPopUp(1)" id="inregistrare">'.$lang[$language]["login"].'</a>
					<a href="#" onclick="showPopUp(3)"id="contact">'.$lang[$language]["contact"].'</a>
        </div>

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


    <div  class="box" id="LoginPopUp">
        <div id="headLogin">
            <h2>Login</h2>
            <div onclick="closePopUP(1)"id="closePopUpLogin">X</div>
        </div>

          <form autocomplete="off" action="function/login.php" method="POST">
            <div class="inputBox">
              <input type="text" name="username" required="">
              <label>'.$lang[$language]["user"].'</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="">
                <label>'.$lang[$language]["password"].'</label>
            </div>
            <input type="submit" name="" value="Submit">
          </form>
    </div>



    <div  class="box" id="InregistrarePopUp">
        <div id="headInregistrare">
            <h2>'.$lang[$language]["registration"].'</h2>
            <div onclick="closePopUP(2)" id="closePopUpInregistrare">X</div>
        </div>
        <form autocomplete="off" action="function/registration.php" method="post">
              <div class="inputBox">
                <input type="text" name="username" required="">
                <label>'.$lang[$language]["user"].'</label>
              </div>

              <div class="inputBox">
                  <input type="text" name="nume" required="">
                  <label>'.$lang[$language]["nume"].'</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="prenume" required="">
                    <label>'.$lang[$language]["prenume"].'</label>
                  </div>

                  <div class="inputBox">
                      <input type="text" name="email" required="">
                      <label>Email</label>
                  </div>

                  <div class="inputBox">
                      <input type="password" name="parola" required="">
                      <label>'.$lang[$language]["password"].'</label>
                  </div>
            <input type="submit" name="submitInregistrare" value="Submit">
          </form>
     </div>


     <div  class="box" id="ContactPopUp">
      <div id="headContact">
          <h2>Contact</h2>
          <div onclick="closePopUP(3)"id="closePopUpContact">X</div>
      </div>

      <div class="inputBox">
            <label>'.$lang[$language]["nrTel"].' : 0738574698</label>
        </div>
        <br>
        <div class="inputBox">
              <label>Email: myshop@shop.com</label>
        </div>

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
