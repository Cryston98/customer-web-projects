<?php

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        session_start();

      
        require 'PhpMailer/vendor/autoload.php';
        require 'credential.php';
        $mail = new PHPMailer(true);
        // $var = $_GET['p'];
        try {

    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = EMAIL;                               // SMTP username
    $mail->Password   = PASS;                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    $mail->From= EMAIL;
    $mail->FromName = "Adoptions";
     $mail->addAddress($_SESSION['email']);     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Adoptions';
    $mail->Body    = 'Congratulations! You become the parent for an animal which always will love you!';
    $mail->AltBody = 'Congratulations! You become the parent for an animal which always will love you!';

    $mail->send();
    // Print '<script>alert("You saved a life !!");</script>';
    // Print '<script>window.location.assign("home.php");</script>';
} catch (Exception $e) {
    // Print '<script>alert("The adoption process failed!");</script>';
    // Print '<script>window.location.assign("home.php");</script>';
}
    echo '<script>window.close()</script>';
?>