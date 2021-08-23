<!DOCTYPE html>
<?php
session_start();
include_once 'common.php';
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $lang['PAGE_TITLE']; ?></title>
    <link rel="stylesheet" type="text/css" href="style.css", src="style.css">
    <script src="javascript/dropdown.js"></script>
  </head>
<body style="background-color: #F0E68C">
  <header>
    <div class="main">
      <ul>
        <li ><a href="acasa.php"><?php echo $lang['MENU_HOME']; ?></a></li>
        <li>
                   
                     
                        <a href="dogs.php"><?php echo $lang['Galerie']; ?></a>
                    
        </li>
        <li class="active"><a href="addAnouncement.php"><?php echo $lang['ADD'] ?></a></li>
        <li><a href="logout.php"><?php echo $lang['LOGOUT'] ?></a></li>
        <?php
        if($_SESSION['admin'] == 1)
        {
        echo '<li><a href="admin.php">Admin</a></li>';
        }
        else
        {
        ?>
        <li><a href="contact.php"><?php echo $lang['MENU_CONTACT_US'] ?></a></li>
        
        <?php
        }
        ?>
      </ul>
    </div>
    <div id="languages">
      <a href="index.php?lang=en"><img src="en.png" /></a>
      <a href="index.php?lang=ro"><img src="ro.png" /></a>
        </div>
  </header>
    <div class="container">
     <div align="center"> <h1 style="font-size: 60px"><?php echo $lang['DESCRIPTION'] ?></h1></div>
    </div>
    <form method="post" enctype="multipart/form-data">
  <div class="container" >
    <h1><?php echo $lang['ADD'] ?></h1>

    <label for="OName"><b><?php echo $lang['OWNER_NAME'] ?></b></label><br/>
    <input style="width: 20%" type="text" placeholder="Enter name" name="OName" required><br/>

    <label for="Phone"><b><?php echo $lang['PHONE'] ?></b></label><br/>
    <input style="width: 20%" type="text" placeholder="Enter phone" name="Phone" required><br/>

    <label for="PName"><b><?php echo $lang['PET_NAME'] ?></b></label><br/>
    <input style="width: 20%" type="text" placeholder="Enter pet's name" name="PName" required><br/>

    <label for="Age"><b><?php echo $lang['AGE'] ?></b></label><br/>
    <input style="width: 20%" type="text" placeholder="Enter age" name="Age" required><br/>

    <label for="info"><b><?php echo $lang['INFO'] ?></b></label><br/>
    <input style="width: 20%" type="text" placeholder="Enter informations about pet" name="info" required><br/>
    
    <label for="info"><b><?php echo $lang['IMG'] ?></b></label><br/>
    <input type="file" name="image"><br/>

    <form method="post"><br>
  <input type="checkbox" name="pet" value="Dog"> Dog<br>
</form>    
    <button style="width: 20%" type="submit" class="registerbtn" name="regbtn"><?php echo $lang['REGISTER'] ?></button>
  </div>

</form>
     <div class="footer">
     <div class="container">
      <div class="clearfix"></div>
      <div class="copy">
           <p> &copy; 2019 Adoptions. All Rights Reserved | Design by <a href="index.php?lang=<?php echo $lang['LANG']; ?>" target="_blank">Mihancea Miruna</a></p>
      </div>
    </div>
   </div>
</body>
</html>

<?php
    define("DB_HOST", "localhost");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "web");
    $db = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_POST['pet']) && $_POST['pet'] == 'Dog')
{
if(isset($_POST['regbtn'])){
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $OName = mysqli_real_escape_string($db,$_POST['OName']);
    $Phone = mysqli_real_escape_string($db,$_POST['Phone']);
    $PName = mysqli_real_escape_string($db,$_POST['PName']);
    $Age = mysqli_real_escape_string($db,$_POST['Age']);
    $info = mysqli_real_escape_string($db,$_POST['info']);
    $imagetmp=addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $bool = true;
    
    $string = "INSERT INTO dogs (OName, IDowner, Phone, PName, Age, info, image) VALUES ('$OName','{$_SESSION['ido']}' ,'$Phone','$PName','$Age', '$info', '$imagetmp')";

    $query = mysqli_query($db, "Select * from dogs"); //Query the dogs table
        
        if($bool) // checks if bool is true
        {
            mysqli_query($db, "INSERT INTO dogs (OName, IDowner, Phone, PName, Age, info, image) VALUES ('$OName','{$_SESSION['ido']}' ,'$Phone','$PName','$Age', '$info', '$imagetmp')");

            //Inserts the value to table dogs
            Print '<script>alert("Congratulations. An animal will find a home because of you!<3");</script>'; // Prompts the user
            Print '<script>window.location.assign("addAnouncement.php");</script>';
        }
}
}
}
else if (isset($_POST['pet']) && $_POST['pet'] == 'Cat')
{
  if(isset($_POST['regbtn'])){
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $OName = mysqli_real_escape_string($db,$_POST['OName']);
    $Phone = mysqli_real_escape_string($db,$_POST['Phone']);
    $PName = mysqli_real_escape_string($db,$_POST['PName']);
    $Age = mysqli_real_escape_string($db,$_POST['Age']);
    $info = mysqli_real_escape_string($db,$_POST['info']);
    $imagetmp=addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $bool = true;
    
    $string = "INSERT INTO cats (OName, Phone, PName, Age, info, image) VALUES ('$OName','$Phone','$PName','$Age', '$info', '$imagetmp')";

    $query = mysqli_query($db, "Select * from cats"); //Query the cats table

        if($bool) // checks if bool is true
        {
            mysqli_query($db, "INSERT INTO cats (OName, Phone, PName, Age, info, image) VALUES ('$OName','$Phone','$PName','$Age', '$info', '$imagetmp')");

            //Inserts the value to table cats
            Print '<script>alert("Congratulations. An animal will find a home because of you!<3");</script>'; // Prompts the user
            Print '<script>window.location.assign("addAnouncement.php");</script>'; 
        }
}
}
}
?>