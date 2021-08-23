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

    $username = mysqli_real_escape_string($db,$_POST['username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $admin = mysqli_real_escape_string($db,$_POST['admin']);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(isset($_POST['updbtn'])){
    $query="UPDATE users SET Username='$username', email='$email',admin=$admin  WHERE  Username='{$_SESSION['CHANGE']}'";
    $checkresult = mysqli_query($db, $query);
    if($checkresult)
    {
        Print '<script>alert("Your information update succesfully.");</script>';
        Print '<script>window.location.assign("acasa.php");</script>';
    }
    else{
    Print '<script>alert("Failed.");</script>';
    Print '<script>window.location.assign("admin.php");</script>';
    }
    }
    if(isset($_POST['deletebtn'])){

    $query="DELETE FROM users WHERE  Username='{$_SESSION['CHANGE']}'";
    $checkresult = mysqli_query($db, $query);
    if($checkresult)
    {
        Print '<script>alert("Delete succesfully.");</script>';
        Print '<script>window.location.assign("acasa.php");</script>';
    }
    else{
    Print '<script>alert("Failed.");</script>';
    Print '<script>window.location.assign("admin.php");</script>';
    }
    }
    }
  mysqli_close($db);
?>