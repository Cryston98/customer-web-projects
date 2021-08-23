<?php
 include("db_connect.php");
 
 if($_SERVER["REQUEST_METHOD"] == "POST") 
 {
    $serviciu = mysqli_real_escape_string($db,$_POST['serviciu']);
    $pret = mysqli_real_escape_string($db,$_POST['pret']); 
    
    $sql = "SELECT  SERVICIU FROM db_servicii WHERE SERVICIU='$serviciu'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count > 0)
    {
       header("location: ../pages/panouControlAdmin.php?result=ServiciuAlreadyExisted!");
    }else{
        $sql = "INSERT INTO db_servicii (SERVICIU,PRET) VALUES ('$serviciu','$pret')";
        $result=mysqli_query($db,$sql);
        if($result==1)
        {
            mysqli_close($db);
            header('Location:../pages/panouControlAdmin.php?rez=succes');
        }
        else
        {
            header('Location:../pages/panouControlAdmin.php?rez=error');
        }
    }
}
?>