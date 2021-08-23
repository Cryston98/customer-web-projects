<!DOCTYPE html>
<?php
session_start();
include_once 'common.php';
?>
<html>
	<head>
		<title><?php echo $lang['PAGE_TITLE']; ?></title>
		<link rel="stylesheet" type="text/css" href="style.css", src="style.css">
    <link rel="stylesheet" type="text/css" href="buttonStyle.css", src="buttonStyle.css">
		<script src="javascript/dropdown.js"></script>
		<style>
		/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical;/* Allow the user to vertically resize the textarea (not horizontally) */
  display: block;
  text-align: center;
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: red;
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker  color */
input[type=submit]:hover {
  background-color: #00FF00;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #F0E68C;
  padding: 20px;
}
</style>
	</head>
<body>
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
        <li class="active"><a href="contact.php"><?php echo $lang['MENU_CONTACT_US'] ?></a></li>
       
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
    <div class="container">
      <h3><?php echo $lang['CONTACT_DESC'] ?></h3>
    </div>
    <div class="container">
  <form method="post">

    <label for="fname"><?php echo $lang['FNAME'] ?></label>
    <input type="text" id="fname" name="firstname" placeholder="Your name...">

    <label for="lname"><?php echo $lang['LNAME'] ?></label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name...">

    <label for="phone"><?php echo $lang['PHONE'] ?></label>
    <input type="text" id="phone" name="phone" placeholder="Your phone number...">

    <label for="subject"><?php echo $lang['SUBJECT'] ?></label>
    <textarea id="subject" name="subject" placeholder="Please, let me know if you have a problem..." style="height:100px"></textarea>

    <button  name="contactBtn">SUBMIT</button>

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
<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
  if(isset(($_POST['contactBtn'])))
  {

    require 'PhpMailer/vendor/autoload.php';
    require 'credential.php';
    $mail = new PHPMailer(true);
    try {

    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = EMAIL;                              // SMTP username
    $mail->Password   = PASS;                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    $mail->From= EMAIL;
    $mail->FromName = "Adoptions";
     $mail->addAddress('miru.mihancea@yahoo.com');     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Tehnical problem encountered by:'.$_POST['firstname'].' '.$_POST['lastname'];
    $mail->Body    = 'Problem: '.$_POST['subject'].'Phone: '.$_POST['phone'];
    $mail->AltBody = 'Problem: '.$_POST['subject'].'Phone: '.$_POST['phone'];

    $mail->send();
    Print '<script>alert("I will contact you as soon as I can to resolv the problem! Thank you for your feedback.");</script>';
} catch (Exception $e) {
    Print '<script>alert("The message has not been send!");</script>';
}

  }
?>