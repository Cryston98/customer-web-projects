<?php
  include "function/config.php";
     $Name=$_POST['RoNameProducts'];
     $Pret=$_POST['RoPretProducts'];
     $Cantitate=$_POST['RoCantitateProducts'];
     $type=$_POST['typeProduct'];
     echo $type;


$file = $_FILES['PhotoUP'];
if(isset($_FILES['PhotoUP']))
{
  $image_info = getimagesize($_FILES["PhotoUP"]["tmp_name"]);
  $image_width = $image_info[0];
  $image_height = $image_info[1];
}


$fileName=$_FILES['PhotoUP']['name'];
$fileTmpName=$_FILES['PhotoUP']['tmp_name'];
$fileSize=$_FILES['PhotoUP']['size'];
$fileError=$_FILES['PhotoUP']['error'];
$fileType=$_FILES['PhotoUP']['type'];
$fileExt=explode('.',$fileName);
$fileActualExt=strtolower(end($fileExt));
$allowed = array('jpg','jpeg','png','ico','gif');
if(in_array($fileActualExt,$allowed))
  {
        if($fileSize<1000000) //2000KB
        {

                $fileDestination='img/produse/'. $Name.".".$fileActualExt;
                move_uploaded_file($fileTmpName,$fileDestination);

                //Verif if photo was uploaded
                if(file_exists ($fileDestination))
                {
                  $imageModul= substr($fileDestination, 12);  // bcd 
                }else{
                    header('Location:adminPage.php?status=NoUploadImg');
                }

        }else{
            header('Location:../index.php?status=ImageIsTooBig');
            exit();
        }
    }else{
            header('Location:../index.php?status=ImageFormatIsNotAllowed');
            exit();
    }
      mysqli_select_db($connect,'machiaje');
      $SQL="INSERT INTO $type (nume,pret,cantitate,img) VALUES ('$Name','$Pret','$Cantitate','$imageModul')";

      $result = mysqli_query($connect, $SQL);
      if ($result)
      {
             mysqli_close($connect);
             header('Location:adminPage.php?status=Succes');
      }else{
           $errorFunctionality=mysqli_error($connect);
           mysqli_close($connect);
           header('Location:adminPage.php?status=eroare');
      }

?>
