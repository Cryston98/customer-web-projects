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

    </head>
<body style="background-color: #F0E68C">
    <header>
        <div class="main">
            <ul>
                <li ><a href="index.php"><?php echo $lang['MENU_HOME']; ?></a></li>

                <li class="active"><a href="login.php"><?php echo $lang['LOGIN_PAGE'] ?></a></li>
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
        <form method="post" >
    <label for="email"><b>Email</b></label><br/>
    <input style="width: 20%;" type="text" value="" name="email" required><br/>

    <label for="newpsw"><b><?php echo $lang['PASSWORD'] ?></b></label><br/>
    <input style="width: 20%" type="password" value="" name="newpsw" required><br/>

    <label for="newpsw-repeat"><b><?php echo $lang['REPEAT_PASSWORD'] ?></b></label><br/>
    <input style="width: 20%" type="password" value="" name="newpsw_repeat" ><br/>
    <button style="width: 20%" type="submit"  name="change" required>Update</button>
</form>
    </div>
    <div>
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
if(isset($_POST['change'])){
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $newpsw = mysqli_real_escape_string($db,sha1($_POST['newpsw']));
    $newpsw_repeat = mysqli_real_escape_string($db,sha1($_POST['newpsw_repeat']));
    if($psw === $psw_repeat){
    $query="UPDATE users SET  psw='$newpsw',psw_repeat='$newpsw_repeat'  WHERE  email='$email'";
    $checkresult = mysqli_query($db, $query);
    if($checkresult)
    {
        Print '<script>alert("Your password update succesfully.");</script>';
        Print '<script>window.location.assign("login.php");</script>';
    }
    else
    {
       Print '<script>alert("Error.");</script>';
        Print '<script>window.location.assign("login.php");</script>'; 
    }
    }
}
}
?>