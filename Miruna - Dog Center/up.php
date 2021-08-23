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

    $OName = mysqli_real_escape_string($db,$_POST['OWNER_NAME']);
    $Phone = mysqli_real_escape_string($db,$_POST['PHONE']);
    $PName = mysqli_real_escape_string($db,$_POST['PET_NAME']);
	$Age = mysqli_real_escape_string($db,$_POST['AGE']);
	$info = mysqli_real_escape_string($db,$_POST['INFO']);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(isset($_POST['Modify'])){
    $query="UPDATE users SET OName='$OName', Phone='$Phone',PName='$PName'  WHERE  OName='{$_SESSION['CHANGE']}'";
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
    if(isset($_POST['Modify'])){

    $query="DELETE FROM dogs WHERE  OName='{$_SESSION['CHANGE']}'";
    $checkresult = mysqli_query($db, $query);
    if($checkresult)
    {
        Print '<script>alert("Updated succesfully.");</script>';
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