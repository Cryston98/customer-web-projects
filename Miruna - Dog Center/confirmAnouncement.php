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
		<link rel="stylesheet" type="text/css" href="buttonStyle2.css", src="buttonStyle2.css">
		<script src="javascript/dropdown.js"></script>
        <style >
   .column {
  float: left;
  width: 14.28%;
  padding: 10px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}
        </style>
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
        <div class="container" >
        <form method="post">
    <label for="id"><b><?php echo $lang['ELEMENTforCONFIRM'] ?></b></label><br/>
    <input style="width: 20%;align-self: middle" type="text" value="" name="id" required><br/>
  <input type="checkbox" name="pet" value="Dog"> Dog<br>
    <button style="width: 20%" type="submit"  name="confirm" ><?php echo $lang['CONFIRM'] ?></button>
</form>
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
        echo "<table border=\"1\">";
        echo  "<tr><th>ID</th><th>Owner</th><th>Phone</th><th>Pet</th><th>Age</th><th>Informations</th></tr>";
        echo "<tr><th>Dogs</th></tr>";
        if($result->num_rows > 0)
        {
        while($row = $result->fetch_assoc()){
        if($row['confirmed']==0){
        echo  "<tr><td>".$row['ID']."</td><td>".$row["OName"]."</td><td>".$row["Phone"]."</td><td>".$row["PName"]."</td><td>".$row["Age"]."</td><td>".$row["info"]."</td></tr>";
        echo '<br>';
        }
        }
        }
        
        echo "</table>";
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
<?php
$db = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        // Check connection
        if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
if(isset($_POST['confirm']))
{
    if(isset($_POST['pet']) && $_POST['pet'] == 'Dog')
    {
        mysqli_query($db, "UPDATE dogs SET confirmed = 1 WHERE id='{$_POST['id']}'"); 
            Print '<script>alert("Successfully confirmed anouncement!");</script>'; 
            Print '<script>window.location.assign("confirmAnouncement.php");</script>'; 
    }
}

$db->close();
?>