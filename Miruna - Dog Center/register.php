<!DOCTYPE html>
<?php
include_once 'common.php';
?>
<style>
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

</style>
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
      <div align="center"><h1 style="font-size: 60px"><?php echo $lang['DESCRIPTION'] ?></h1></div>
    </div>
	<form method="post">
  <div class="container" >
    <h1><?php echo $lang['REGISTER'] ?></h1>
    <p><?php echo $lang['REGISTER_MOTTO'] ?></p>

    <label for="Username"><b><?php echo $lang['USERNAME'] ?></b></label><br/>
    <input style="width: 20%" type="text" placeholder="Enter username" name="Username" required><br/>

    <label for="email"><b>Email</b></label><br/>
    <input style="width: 20%" type="text" placeholder="Enter Email" name="email" required><br/>

    <label for="psw"><b><?php echo $lang['PASSWORD'] ?></b></label><br/>
    <input style="width: 20%" type="password" placeholder="Enter Password" name="psw" required><br/>

    <label for="psw-repeat"><b><?php echo $lang['REPEAT_PASSWORD'] ?></b></label><br/>
    <input style="width: 20%" type="password" placeholder="Repeat Password" name="psw_repeat" required><br/>

    <button style="width: 20%" type="submit" class="registerbtn" name="regbtn"><?php echo $lang['REGISTER'] ?></button>
  </div>

  <div class="container signin" style="background-color: #F0E68C">
    <p><?php echo $lang['EXISTING_ACCOUNT'] ?></p>
    <a href="login.php" style="font-size:25px"><?php echo $lang['LOGIN'] ?></a>
  </div>
</form>
<br>
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
if(isset($_POST['regbtn'])){
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Username = mysqli_real_escape_string($db,$_POST['Username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $psw = mysqli_real_escape_string($db,sha1($_POST['psw']));
    $psw_repeat = mysqli_real_escape_string($db,sha1($_POST['psw_repeat']));
    $bool = true;
    
            $string = "INSERT INTO users (Username, email, psw, psw_repeat) VALUES ('$Username','$email','$psw','$psw_repeat')";

            echo '<script>console.log("INSERT INTO users (Username, email, psw, psw_repeat) VALUES ($Username,$email,$psw,$psw_repeat)")</script>';

    if(sha1($psw) != sha1($psw_repeat)){
        Print '<script>alert("Check again the password!");</script>'; //Prompts the user
        Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        Print '<script>alert("Invalid email format");</script>'; //Prompts the user
        Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
    }else{
        $query = mysqli_query($db, "Select * from users"); //Query the users table
        while($row = mysqli_fetch_array($query)) //display all rows from query
        {
            $table_users = $row['Username']; // the first username row is passed on to $table_users, and so on until the query is finished
            if($username == $table_users) // checks if there are any matching fields
            {
                $bool = false; // sets bool to false
                Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
                Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
            }
        }
        if($bool) // checks if bool is true
        {
            mysqli_query($db, "INSERT INTO users (Username, email, psw, psw_repeat) VALUES ('$Username','$email','$psw','$psw_repeat')");

            //Inserts the value to table users
            Print '<script>alert("Successfully Registered!Please login in your account!");</script>'; // Prompts the user
            Print '<script>window.location.assign("login.php");</script>'; // redirects to home.php
        }
    }
}
}
?>