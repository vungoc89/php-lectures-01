<?php

/* 
1.TICH HOP PHP MAILER (INTEGRATE PHP MAILER)
 * -> B1: Khao sat plugin (survey plugin)
 * -> B2: download plugin (https://github.com/PHPMailer/PHPMailer)
 * -> B3: Cau hinh (configure)(https://github.com/PHPMailer/PHPMailer)
 * -> B4: Test gui thong tin tu dong(test send automatically infomation)
 * 
 * smtp gmail google
 * //https://support.google.com/a/answer/176600?hl=en
 * 
 * email nhận phải tắt bảo mật 2 lớp thì mail gửi mới đến được. 
 */
//NOTE: DANG BI ERROR CHUA SEND DUOC MAIL
?>

<?php
//require 'include-mail/Exception.php';
//require 'include-mail/PHPMailer.php';
//require 'include-mail/SMTP.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
//    $mail->SMTPDebug = 1;                      //Enable verbose debug output
    
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = "smtp.gmail.com";                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = "jupiterguard0123456@gmail.com";                     //SMTP username
    $mail->Password   = "uycpxnywtvgmgvao";                               //SMTP password
    //
//    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
    
    $mail->Port       = "587";                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = "UTF-8";
    //Recipients
    $mail->setFrom('jupiterguard0123456@gmail.com', 'JupiterGuard');
    $mail->addAddress('vuquocngoc1989@gmail.com', 'John Vu');     //Add a recipient
//    $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('jupiterguard0123456@gmail.com', 'JupiterGuard');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

    //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
    $mail->addAttachment('coder01.jpg', 'coder.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'This letter from <b>PHP Master</b>';
    $mail->Body    = 'This letter from <b>PHP Master</b>';
//    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Successful send mail ! Thank you !';
} catch (Exception $e) {
    echo "Mail could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
