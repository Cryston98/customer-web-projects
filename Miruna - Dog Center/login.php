<!DOCTYPE html>
<?php
include_once 'common.php';
?>
<html>
	<head>
    <script type="text/javascript">window.scrollTo(0,document.body.scrollHeight);</script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $lang['PAGE_TITLE']; ?></title>
		<link rel="stylesheet" type="text/css" href="style.css", src="style.css">
		<script src="javascript/dropdown.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

button:hover {
  opacity: 0.8;
}


/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 15%;
  border-radius: 50%;
}

span.psw {
  float: center;
  padding-top: 16px;
}
.container h1{
  font-size: 60px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
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

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  width: 100%; /* Could be more or less, depending on screen size */
}

/* Add Zoom Animation */
.animate {`
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
}
.container {
  border-radius: 5px;
  background-color: #F0E68C;
  padding: 20px;
}
</style>
	</head>
<body style="background-color: #F0E68C">
	<header>
		<div class="main">
			<ul>
				<li ><a href="index.php"><?php echo $lang['MENU_HOME']; ?></a></li>
				<li class="active"><a href="#"><?php echo $lang['LOGIN_PAGE'] ?></a></li>
			</ul>
		</div>
		
		<div id="languages">
			<a href="index.php?lang=en"><img src="en.png" /></a>
			<a href="index.php?lang=ro"><img src="ro.png" /></a>
        </div>
	</header>
  <div class="container">
      <h1><div align="center"><?php echo $lang['DESCRIPTION'] ?></h1></div>
    </div>
  <form class="modal-content animate" action="checklogin.php" method="post" style="background-color: #F0E68C">
    <div class="imgcontainer">
      <img src="blue.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="Username"><b><?php echo $lang['USERNAME'] ?></b></label><br/>
      <input type="text" placeholder="Enter Username" name="Username" required><br/>

      <label for="psw"><b><?php echo $lang['PASSWORD'] ?></b></label><br/>
      <input type="password" placeholder="Enter Password" name="psw" required><br/>
        
      <button type="submit"><?php echo $lang['LOGIN'] ?></button>
    </div>
    <div class="container" style="background-color: #F0E68C">
      <span class="psw"><?php echo $lang['CREATE'] ?><a href="register.php"><?php echo $lang['ACCOUNT'] ?></a></span>
    </div>
    <div class="container">
      <span class="psw"><?php echo $lang['F'] ?> <a href="changePassword.php"><?php echo $lang['PASSWORD'] ?>?</a></span>
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