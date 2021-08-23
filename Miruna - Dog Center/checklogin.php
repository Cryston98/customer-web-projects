<?php
	session_start();
	
	define("DB_HOST", "localhost");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "web");
    $db = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
	
if(isset($_POST['Username'])){
	$Username = mysqli_real_escape_string($db, $_POST['Username']);}
	$psw = mysqli_real_escape_string($db, sha1($_POST['psw']));
	 echo '<script>console.log("Password: ' . $Username . '")</script>';
	$query = mysqli_query($db, "SELECT * from users WHERE Username='$Username'"); //Query the users table if there are matching rows equal to $username
	$exists = mysqli_num_rows($query); //Checks if username exists
	$table_users = "";
	$table_password = "";
	$table_emails = "";
	if($exists > 0) //IF there are no returning rows or no existing username
	{
		while($row = mysqli_fetch_assoc($query)) //display all rows from query
		{
			$table_users = $row['Username']; // the first username row is passed on to $table_users, and so on until the query is finished
			$table_password = $row['psw']; // the first password row is passed on to $table_users, and so on until the query is finished
			$table_emails = $row['email'];
			$table_admins = $row['admin'];
			$table_id = $row['id'];
		}
		if(($Username == $table_users) && ($psw == $table_password)) // checks if there are any matching fields
		{
				if($psw == $table_password)
				{
					$_SESSION['Username'] = $Username; //set the username in a session. This serves as a global variable
					$_SESSION['email'] = $table_emails;
					$_SESSION['admin'] = $table_admins;
					$_SESSION['ido'] = $table_id;
					$_SESSION['password'] = $table_password;
					header("location: acasa.php"); // redirects the user to the authenticated home page
				}
				
		}
		else
		{
			Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
			Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
		}
	}
	else
	{
		Print '<script>alert("Incorrect Username!");</script>'; //Prompts the user
		Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
	}
?>