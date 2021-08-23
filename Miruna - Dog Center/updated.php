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
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Username = mysqli_real_escape_string($db,$_POST['Username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $psw = mysqli_real_escape_string($db,$_POST['psw']);
    $psw_repeat = mysqli_real_escape_string($db,$_POST['psw_repeat']);
    if($psw === '' and $psw_repeat === ''){
    $query="UPDATE users SET Username='$Username', email='$email'  WHERE  id={$_SESSION['ido']}";
    }
    else{
    $query="UPDATE users SET Username='$Username', email='$email',psw=sha1('$psw'),psw_repeat=sha1('$psw_repeat')  WHERE  id={$_SESSION['ido']}";
    }
    $checkresult = mysqli_query($db, $query);
    if($checkresult)
    {
        Print '<script>alert("Your information update succesfully.");</script>';
        Print '<script>window.location.assign("acasa.php");</script>';
    }
  mysqli_close($db);
  }
  ?>