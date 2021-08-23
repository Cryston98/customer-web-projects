<?php
 include("db_connect.php");
 session_start();

 if($_SERVER["REQUEST_METHOD"] == "POST") 
 {
    // username and password sent from form 
    


   if(isset($_SESSION['login_user_id'])){
    $myuserID =  $_SESSION['login_user_id'];
  }else{
    $myuserID=0;
    $_SESSION['msgProgramare']="<h1>Trebuie sa fi logat pentru a face o programare</h1>";
    header('Location:../pages/programari.php?rez=NoLoged');
    exit();
  }

    $servicii=implode(', ', $_POST['services']);
    $dataAn = mysqli_real_escape_string($db,$_POST['dataProgramareAn']);
    $dataLuna = mysqli_real_escape_string($db,$_POST['dataProgramareLuna']); 
    $dataZi = mysqli_real_escape_string($db,$_POST['dataProgramareZi']); 
    
    echo $servicii."<br>";
    echo "user id:".$myuserID;

    $dataP=$dataAn."-".$dataLuna."-".$dataZi;
    echo  "<br>".$dataP;


    $sql = "INSERT INTO db_programari (ID_SERVICII,ID_UTILIZATOR,DATA) VALUES ('$servicii', '$myuserID', '$dataP')";
    $result=mysqli_query($db,$sql);
    if($result==1)
    {
            mysqli_close($db);
            $_SESSION['msgProgramare']="<h1>Programare Realizata cu succes!</h1><br><b>Va asteptam pe data de $dataP pentru reparatii.<br>Echipa EngineRepaire va multumeste!</b>";
            header('Location:../pages/programari.php?rez=ok');
    }else
    { 
            $_SESSION['msgProgramare']="<h1>Programare Esuata - Try again!</h1>";
            header('Location:../pages/programari.php?rez=error');
    }
}
 

?>
