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
                    
                    		<a href="dogs.php"><?php echo $lang['Galerie']; ?></a>
                    	
				</li>
				<li ><a href="addAnouncement.php"><?php echo $lang['ADD'] ?></a></li>
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
        <div class="display">
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
		if($result->num_rows > 0)
		{echo '<hr/>';
		while($row = $result->fetch_assoc()){
        if($row['confirmed'] == 1){
			echo '<div class="row">';
			echo '<div class="column">';
		echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" style="width:100%"/>'."<br>";
        echo '</div>';
        echo '<div class="column" style="font-size:19px">';
        echo $lang["OWNER_NAME"].": ".$row["OName"]."<br>".$lang["PHONE"].": ".$row["Phone"].'<br>'.$lang["PET_NAME"].": ".$row["PName"]."<br>".$lang["AGE"].": ".$row["Age"]."<br>".$lang["INFO"].": ".$row["info"]."<br>";
        echo '<br><br>';
        ?>
        <form method = "post" action="mail.php">
        <button type="submit"  name="adoptbtn"><?php echo $lang["ADOPT"]?></button>
    	</form>
        <?php
        echo '</div>';
        echo '</div>';
        echo '<hr/>';
	    }
		}
        }
		$db->close();
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
