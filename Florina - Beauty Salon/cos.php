<?php
  include "function/configLanguage.php";
  include "function/infoAboutProdus.php";
  include "language.php";

  $user=$_SESSION['username'];

  if(!isset($_SESSION[$user]['cntCos'])){
    $_SESSION[$user]['cntCos']=0;
    $_SESSION[$user]['listaProduse']=array();
    $_SESSION['old']="";
    if(isset($_GET['produs']) && $_GET['produs']!=''&& ($_SESSION['old']!=$_GET['produs']||$_SESSION['old']=="")){
            $_SESSION['old']=$_GET['produs'];
            $_SESSION[$user]['listaProduse'][$_SESSION[$user]['cntCos']]=$_GET['produs'];
            $_SESSION[$user]['cntCos']++;
    }
  }else{
    if(isset($_GET['produs']) && $_GET['produs']!=''&& (isset($_SESSION['old'])==null || $_SESSION['old']!=$_GET['produs']||$_SESSION['old']=="")){
            $_SESSION['old']=$_GET['produs'];
            $_SESSION[$user]['listaProduse'][$_SESSION[$user]['cntCos']]=$_GET['produs'];
            $_SESSION[$user]['cntCos']++;
    }
  }

?>
<?php
echo '
<head>
    <title >'.$lang[$language]["title"].'</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>

<boqy>
<div id="navigareCos">
    <h5><a href="home.php">'.$lang[$language]["home"].'</a></h5>
    <h5><a href="ochi.php">'.$lang[$language]["eyes"].'</a></h5>
    <h5><a href="buze.php">'.$lang[$language]["lips"].'</a></h5>
    <h5><a href="fata.php">'.$lang[$language]["face"].'</a></h5>
    <h5><a href="home.php?local=en">English</a></h5>
    <h5><a href="home.php?local=ro">Romana</a></h5>
</div>

<div id="meniuCos">
    <div id="leftSide">
        <h2>'.$lang[$language]["cart"].'</h3>
        <a href="stergeCos.php"><i class="far fa-trash-alt"></i> '.$lang[$language]["emptyAllCart"].'</a>
        <input type="hidden" id="runPhp"/>
        <div id="emptyCos"></div>';

          $totalPret=0;
          if ($_SESSION[$user]['cntCos']==0) {
            echo $lang[$language]["emptyCart"];
          }
          for($i=0;$i<$_SESSION[$user]['cntCos'];$i++){
                echo '
                <div class="itemCos" id="idItem'.$i.'">
                    <img src="img/produse/'.$_SESSION['img'][$_SESSION[$user]['listaProduse'][$i]].'"/>
                    <div class="numeItem" id="numeItem'.$i.'">'.$_SESSION[$user]['listaProduse'][$i].'</div>
                    <div class="pretItem">'.$_SESSION['pret'][$_SESSION[$user]['listaProduse'][$i]].'</div>
                    <div class="deleteItem" onclick="deteteProdus('.$i.','.intval($_SESSION['pret'][$_SESSION[$user]['listaProduse'][$i]]).')"><i class="far fa-trash-alt"></i> '.$lang[$language]["delProduct"].'</div>
                </div>';
            $totalPret=$totalPret+intval($_SESSION['pret'][$_SESSION[$user]['listaProduse'][$i]]);
          }

  echo '</div>

    <div id="rightSide">
       <h3>'.$lang[$language]["orderdetails"].'</h3>
       <div class="itemPret"><p>'.$lang[$language]["priceProduct"].'</p><span id="PretTotalProduse">'.$totalPret.'lei</span></div>
       <div class="itemPret"><P>'.$lang[$language]["priceTravel"].'</p><span>15lei</span></div>
       <div id="itemPretTotal">
            <hr>
            <br>
            <h1>Total
                <h5 id="PretTotalComanda">'.($totalPret+15).'lei</h5>
            </h1>
            <button onclick="showPopUp(4),confirmBuy()" id="finalizeazaComanda">'.$lang[$language]["finish"].'</button>
        </div>
    </div>


    <div  class="box" id="CosPopUp">
      <div id="headCos">
          <h2>Adresa livrare</h2>
          <div onclick="closePopUP(4)"id="closePopUpCos">X</div>
      </div>
      <form autocomplete="off" action="finalizare.php" method="post">
        <input type="hidden" id="produse" name="produse"/>
        <input type="hidden" id="pret" name="pret"/> <!--Securitate varza-->

      <div class="inputBox">
            <input type="text" id="judet" name="judet" required />
            <label>Judet</label>
        </div>
        <br>
        <div class="inputBox">
            <input type="text" id="oras" name="oras" required/>
            <label>Oras</label>
        </div>
        <br>
        <div class="inputBox">
            <input type="text" id="strada" name="strada" required />
            <label>Strada</label>
        </div>
        <br>
        <div class="inputBox">
            <input type="number" id="telefon" name="telefon" required/>
            <label>Nr telefon</label>
        </div>
        <input type="submit" name="submitFinalizareComanda" value="Submit">
        </form>
  </div>
</div>
<script src="js/cos.js"></script>
</body>';
?>
