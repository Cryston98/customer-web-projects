<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <!--FONT AWESOME-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>

<div id="leftMenu">
   <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Sterge Programare</a></li>
        <li><a href="#">Adauga Servicii</a></li>
        <li><a href="#">Programari saptamanale</a></li>
   </ul>
</div>

<div id="rigthArea">

<div id="wrap-serviciiAdmin"> 
   <div id="addServicii">
   <b>Adauga Serviciu</b>
      <form action="../include/addServices.php" method="post">
         <input type="text" id="serviciu" name="serviciu" placeholder="Introdu serviciu"/>
         <input type="text" id="pret" name="pret" placeholder="Introdu pret"/>
         <input type="submit" id="submitServici" value="Send"/>
      </form>
   </div>
   <div id="delProgramare">
      <?php include "../include/selectToDelServices.php"; ?>
      
      <?php include "../include/showProgramari.php"; ?>
   </div>
   <div id="showProgramari">
      
   </div>
</div>


</div>

</body>
</html>
