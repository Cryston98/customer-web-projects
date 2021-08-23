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
    $sql = "SELECT * FROM dogs";
    $result = $db->query($sql);
    if(isset($_POST['updatebtn'])){
    if($result->num_rows > 0)
        {
        while($row = $result->fetch_assoc()){
        if($row['OName'] == $_POST['OName']){
            $_SESSION['CHANGE'] = $_POST['OName'];
    ?>
    <form method="post" action="up.php">
  <div class="container" >

    <label for="OName"><b><?php echo $lang['USERNAME'] ?></b></label><br/>
    <input style="width: 20%" type="text" value="<?php echo $row['Username'];?>" name="ownername" required><br/>

    <label for="IDowner"><b>IDowner</b></label><br/>
    <input style="width: 20%" type="text" value="<?php echo $row['IDowner'];?>" name="ownerid" required><br/>

     <label for="Phone"><b><?php echo $lang['PHONE'] ?></b></label><br/>
    <input style="width: 20%" type="text" value="<?php echo $row['PHONE'];?>" name="phone" required><br/>
	
	 <label for="PName"><b><?php echo $lang['PET_NAME'] ?></b></label><br/>
    <input style="width: 20%" type="text" value="<?php echo $row['PET_NAME'];?>" name="petname" required><br/>

 <label for="Age"><b><?php echo $lang['AGE'] ?></b></label><br/>
    <input style="width: 20%" type="text" value="<?php echo $row['AGE'];?>" name="age" required><br/>
	
	<label for="info"><b><?php echo $lang['INFO'] ?></b></label><br/>
    <input style="width: 20%" type="text" value="<?php echo $row['INFO'];?>" name="info" required><br/>
	
	<label for="image"><b>Image</b></label><br/>
    <input style="width: 20%" type="text" value="<?php echo $row['IMG'];?>" name="imagine" required><br/>
	
    <button style="width: 20%" type="submit" class="updbtn" name="updbtn"><?php echo $lang['UPD2'];?></button>
    <button style="width: 20%" type="submit" class="deletebtn" name="deletebtn"><?php echo $lang['Modify'];?></button>
</div></form>
    <?php
}
}
}
}
mysqli_close($db);
?>
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