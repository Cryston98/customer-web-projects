<?php
   include('../include/session.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>ENGINE REPAIR</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/programari.css">
 
</head>
<body>
    

  <div id="wrap-header-programari">
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
    
    <div id="programari">
      <div id="leftProgramari">
              <?php include "../include/calendar.php"; ?>
      </div>
      <div id="rightProgramari">
         
         <b>Selecteaza serviciile dorinte : </b>
         <form action="../include/salveazaProgramare.php" method="post" id="selectServicesForm" onSubmit="return checkform()" >
          
           <?php include "../include/getServicii.php"; ?>

            <input type="hidden" id="dataProgramareAn" name="dataProgramareAn" value="0" required/>
            <input type="hidden" id="dataProgramareLuna" name="dataProgramareLuna" value="0"  required/>
            <input type="hidden" id="dataProgramareZi" name="dataProgramareZi" value="0" required/>
            
         
           <input type="submit" id="submitProgramari" value="Submit">
         </form>
      </div>
      <div id="resultProgramari">
    <?php 
     if(isset($_SESSION['msgProgramare'])){
        echo $_SESSION['msgProgramare'];
        unset($_SESSION['msgProgramare']);
      }
    ?>
      </div>

    </div>



  </div>
<script src="../js/script.js"></script>
</body>

</html>