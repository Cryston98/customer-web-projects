<!DOCTYPE html>
<?php
date_default_timezone_set('Europe/Bucharest');
include_once 'common.php';
?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $lang['PAGE_TITLE']; ?></title>
		<link rel="stylesheet" type="text/css" href="style.css", src="style.css">
		<script src="javascript/dropdown.js"></script>
		<style>
<style>
*{
	margin: 0;
	padding: 0;
	font-family: Century Gothic;
}
header{
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(catel.jpg);
	height: 100vh;
	background-size: cover;
	background-position:center;
}
ul{
	float: right;
	list-style-type: none;
	margin-top: 25px;
	
}
ul li{
	display: inline-block;
}
ul li a{
	text-decoration: none;
	color: #fff;
	padding: 5px 20px;
	border: 1px solid transparent;
	transition: 0.6s ease;
}
ul li a:hover{
	background-color: #fff;
	color: #000;
}
ul li.active a{
	background-color: #fff;
	color: #000;
}
.logo img{
	float: left;
	width: 100px;
	height: auto;
}
.main{
	max-width: 1200px;
	margin: auto;
}
.translate a{
	float: left;
	width: 100px;
	height: auto;
}
.title{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.title h1{
	color: #fff;
	font-size: 30px;
}
.button{
	position: absolute;
	top: 60%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.btn{
	border: 1px solid #fff;
	padding: 10px 30px;
	color: #fff;
	text-decoration: none;
	transition: 0.6s ease;
}
.btn:hover{
	background-color: #fff;
	color: #000;
}
	</style>
	</head>
<body style="background-color: #F0E68C">
	<header>
		<div class="main">
			<ul>
				<li class="active"><a href="#"><?php echo $lang['MENU_HOME']; ?></a></li>
				<li><a href="login.php"><?php echo $lang['LOGIN_PAGE'] ?></a></li>
			</ul>
		</div>
		<div id="languages">
			<a href="index.php?lang=en"><img src="en.png" /></a>
			<a href="index.php?lang=ro"><img src="ro.png" /></a>
        </div>
	</header>
	 
     <div class="footer">
   	 <div class="container">
	    <div class="clearfix"></div>
	    <div class="copy">
           <p> &copy; 2019 Adoptions. All Rights Reserved | Design by <a href="index.php?lang=<?php echo $lang['LANG']; ?>" target="_blank">Miruna Mihancea</a></p>
	    </div>
   	</div>
   </div>
</body>
</html>