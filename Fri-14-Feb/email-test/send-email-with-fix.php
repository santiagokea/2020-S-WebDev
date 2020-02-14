<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
$sPassword = file_get_contents('private/password.txt');
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'YourEmail@gmail.com';                     // SMTP username
    $mail->Password   = $sPassword;                               // SMTP password
    $mail->SMTPSecure = 'ssl';//PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('YourEmail@gmail.com', 'Mailer');
    $mail->addAddress('TheEmail@gmail.com');     // Add a recipient
    $mail->addReplyTo('TheEmail@gmail.com', 'Information');
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['mailContent'];
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}