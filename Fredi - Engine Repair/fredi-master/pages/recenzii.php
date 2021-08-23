<?php
   include('../include/session.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>ENGINE REPAIR</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/recenzii.css">
  <!--FONT AWESOME-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body onload="verifExistErrors()">
  <div id="messageFunctionality"></div>
  
  <div id="wrap-header-recenzii">
    <div id="logo">
      
      <div id="logo1">
        <img id="icon" src="../images/ENGINE_REPAIRpng.png" alt="imagine" />
        <p id="text"> <span id='styleTitle'>ENGINE</span> REPAIR</p>
      </div>

      <div id="meniu">
        <!--navigator-->
        <ul id="meniul">
          <li class="menu"><a href="../index.php">HOME </a></li>
          <li class="menu"><a href="index.html">CONTACT </a></li>
          <li class="menu"><a href="index.html">DESPRE </a></li>
          <li class="menu"><a href="recenzii.php">RECENZII</a></li>
          <li class="menu"><a href="programari.php">PROGRAMARI </a></li>
          <?php 
              if(isset($_SESSION['login_user'])){
                echo  '<li class="menu" id="btnLogOut"><a href="../include/logout.php">LOGOUT</a></li>';
                echo  '<li class="menu" id="usernameSession"><a>'.$login_session.'</a></li>';
              }else{
                echo '<li class="menu" onclick="enterCreditentials()" id="btnLogin"><a>LOGIN</a></li>';
              }
            ?>     
        </ul>
      </div>


      <div id="popUpLogin">
        <div id="closepopUpLogin" onclick="closePopUpLogin()">X</div>
        
        <div id="wrapLoginForm"> 
          <form action="../include/login.php" method="POST" autocomplete="off">
            <input type="email" id="email" name="email" placeholder="Introdu emailul" maxlength="30" autocomplete="off"/>
            <input type="password" id="password" name="password" placeholder="Introdu parola" autocomplete="off" />
            <input type="submit" id="submitLogin" value="Log-in" / >
          </form>
          <p>Nu ai cont ?Apasa <p id="registrationButon" style="color:red;cursor:pointer;" onclick="select_form_registration_or_login(0)">aici</p> pentru inregistrare</p>
        </div>
        
        <div id="wrapSingInForm"> 
            <form action="../include/register.php" autocomplete="off" method="POST" >
              <input type="text" id="user_name" name="user_name" placeholder="Introdu user_name" maxlength="30" autocomplete="off"/>
              <input type="email" id="email_reg" name="email_reg" placeholder="Introdu emailul" maxlength="30" autocomplete="off"/>
              <input type="password" id="password_reg" name="password_reg" placeholder="Introdu parola" autocomplete="off" />
              <input type="submit" id="submitRegister" value="sign_in" / >
            </form>
            <p>Ai cont ?Apasa <p id="loginButon" style="color:red;cursor:pointer;" onclick="select_form_registration_or_login(1)">aici</p> pentru login</p>
        </div>
      
      </div> 

    </div> 

      <?php include "../include/recenzii_tasks.php"; 

        if(isset($_SESSION['login_user'])){
          echo '<form action="../include/saveRecenzii.php" method="post">
                   <input type="text" id="textMyRecenzie" name="textMyRecenzie" placeholder="Introdu o recenzie !"/>
                   <input type="hidden" id="usernameMyRecenzie" name="usernameMyRecenzie" value="'.$login_session.'"/>
                   <input type="hidden" id="ratingMyRecenzie" name="ratingMyRecenzie" value="1"/> 
                   <input type="submit" id="submitRecenzie" value="Send"/>
                </form>';

          echo "<div id='selectRatingStars'>";
          ?>
                <i onmouseover='rating(1)' id='star1' class='colorStars fas fa-star'></i>
                <i onmouseover='rating(2)' id='star2' class='fas fa-star'></i>
                <i onmouseover='rating(3)' id='star3' class='fas fa-star'></i>
                <i onmouseover='rating(4)' id='star4' class='fas fa-star'></i>
                <i onmouseover='rating(5)' id='star5' class='fas fa-star'></i>

           <?php echo "</div>";

              }else{
                echo '<button  onclick="enterCreditentials()" id="btnLoginRecenzie">LOGIN</button>';
              }
      ?>
     
  

  </div>
<script src="../js/script.js"></script>
</body>

</html>