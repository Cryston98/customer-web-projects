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
		<link rel="stylesheet" type="text/css" href="buttonStyle.css", src="buttonStyle.css">
		<script src="javascript/dropdown.js"></script>
		<link rel="stylesheet" type="text/css" href="displayAnimalStyle.css", src="displayAnimalStyle.css">
	</head>
<body style="background-color: #F0E68C">
	<header>
		<div class="main">
			<ul>
				<li ><a href="acasa.php"><?php echo $lang['MENU_HOME']; ?></a></li>
				<li>
                    <div class="dropdown">
                    	<a onclick="myFunction()" class="dropbtn"><?php echo $lang['Galerie']; ?></a>
                    	<div id="myDropdown" class="dropdown-content">
                    		<a href="dogs.php"><?php echo $lang['DOGS']; ?></a>
                    	</div>
                    </div>
				</li>
        <li><a href="addAnouncement.php"><?php echo $lang['ADD'] ?></a></li>
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
      <div align="center"><h1 style="font-size: 60px"><?php echo $lang['DESCRIPTION'] ?></h1></div>
    </div>
    <div>
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
    $sql = "SELECT * FROM users";
    $result = $db->query($sql);
    if($result->num_rows > 0)
        {
        while($row = $result->fetch_assoc()){
        if($row['id'] == $_SESSION['ido']){
    ?>
    <form method="post" action="updated.php">
  <div class="container" >

    <label for="Username"><b><?php echo $lang['USERNAME'] ?></b></label><br/>
    <input style="width: 20%" type="text" value="<?php echo $row['Username'];?>" name="Username" required><br/>

    <label for="email"><b>Email</b></label><br/>
    <input style="width: 20%" type="text" value="<?php echo $row['email'];?>" name="email" required><br/>

    <label for="psw"><b><?php echo $lang['PASSWORD'] ?></b></label><br/>
    <input style="width: 20%" type="password" value="" name="psw" ><br/>

    <label for="psw-repeat"><b><?php echo $lang['REPEAT_PASSWORD'] ?></b></label><br/>
    <input style="width: 20%" type="password" value="" name="psw_repeat" ><br/>

    <button style="width: 20%" type="submit" class="registerbtn" name="updatebtn"><?php echo $lang['UPD'] ?></button>
    <?php
}
}
}
mysqli_close($db);
?>
  </div>
</form>
    </div>
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