<?php
include "function/configLanguage.php";
include "language.php";
echo
'<head>
    <title >Admin Page</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>

<boqy>

<div id="navigareCos">
    <h5><a href="home.php"><i class="ico-item fas fa-home"></i> '.$lang[$language]["home"].'</a></h5>
    <h5><a href="#" onclick="showOption(1)"><i class="far fa-eye"></i> '.$lang[$language]["showOrders"].'</a></h5>
    <h5><a href="#" onclick="showOption(2)"><i class="far fa-plus-square"></i> '.$lang[$language]["addProducts"].'</a></h5>
    <h5><a href="#" onclick="showOption(3)"><i class="far fa-folder-open"></i> '.$lang[$language]["managerProducts"].'</a></h5>
</div>

<div id="optionAdmin1">';
   include "showComenzii.php";
echo '
</div>

<div id="optionAdmin2">
  <form enctype="multipart/form-data" onsubmit="return validateForm()"  action="addProducts.php" method="post">

        <input onchange="validateForm()" type="text" id="RoNameProducts" name="RoNameProducts" placeholder="Nume produs" required/>
        <input onchange="validateForm()" type="text" id="RoPretProducts" name="RoPretProducts" placeholder="Pret produs" required/>
        <input onchange="validateForm()" type="text" id="RoCantitateProducts" name="RoCantitateProducts" placeholder="Cantitate disponibiala produs" required/>
        <select id="typeProduct" name="typeProduct">
          <option value="ochi">Ochi</option>
          <option value="fata">Fata</option>
          <option value="buze">Buze</option>
        </select>
         <div id="wrap-upload-newPlaylist">
             <div id="btnUploadImgPlaylist" onclick="UploadClick()">'.$lang[$language]["uploadPhoto"].'</div>
             <label for="PhotoUP">
            <input type="file" hidden accept="image/*" name="PhotoUP" id="PhotoUP" onchange="validation(1);"/>
          </label>

          <table id="TablePhotoUP">
            <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Size</th>
            <th>Height</th>
            <th>Wight</th>
            <th>Status</th>
            </tr>
            <tr>
            <td><div id="AreaUploadPhoto"><img id="ig" src=""/></div></td>
            <td><p id="NamePhotoUP"></p></td>
            <td><p id="SizePhotoUP"></p></td>
            <td><p id="HeightPhotoUP"></p></td>
            <td><p id="WidthPhotoUP"></p></td>
            <td><p id="StatusPhotoUP"></p></td>
            </tr>
          </table>
        </div>
        <input style="visibility:hidden;height: 0px;margin: 0px;padding: 0px;border: 0px;" name="imageModul" id="imageModul" type="text" value=""/>
        <input type="submit" id="submitServici" value="Send"/>
  </form>
</div>
<div id="optionAdmin3">
    <form id="editForm" action="updateProduct.php" method="post">
      <span onclick="closePopUpEditProduct()">X</span>
      <h2 id="textProduct1"></h2>
      <input type="hidden" id="textProductID1" name="textProductID1"/>
      <input type="hidden" id="typeProductID" name="typeProductID">
      <input type="text" id="priceProductID" name="priceProductID" value="" placeholder="Introdu pretul nou sau vechiul pret"/>

      <input type="text" id="cantityProductID" name="cantityProductID"  value="" placeholder="Introdu cantitate"/>
      <input type="submit" name="submit"  value="Salveaza modificarile"/>
    </form>

    <form id="delectForm" action="deleteProduct.php" method="post">
      <span onclick="closePopUpDeleteProduct()">X</span>
      <h2 id="textProduct2">Ana</h2>
      <input type="hidden" id="typeProductID1" name="typeProductID1">
      <input type="hidden" id="textProductID" name="textProductID" placeholder="Introdu pretul nou sau vechiul pret"/>
      <input type="submit" name="submit"  value="Confirma Stergerea"/>
    </form>
    ';
   include "showProducts.php";
echo '
</div>
<script src="js/app.js"></script>
</body>';

?>
