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
    <script src="javascript/dropdown2.js"></script>
		<style>
/* Three image containers (use 25% for four, and 50% for two, etc) */
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
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
				<li class="active"><a href="acasa.php"><?php echo $lang['MENU_HOME']; ?></a></li>
				<li ><a href="dogs.php"><?php echo $lang['Galerie']; ?></a></li>
				
        <li><a href="addAnouncement.php"><?php echo $lang['ADD'] ?></a></li>
		<li><a href="video.php"><?php echo $lang['Video']; ?></a></li>
		<li><a href="desprenoi.php"><?php echo $lang['Despre noi']; ?></a></li>
		<li><a href="voluntar.php"><?php echo $lang['Devino voluntar']; ?></a></li>
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