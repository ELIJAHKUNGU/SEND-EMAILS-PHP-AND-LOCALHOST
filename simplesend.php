<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
$emailTextHtml='<h1>email sent from php use by phpmailer</h1>';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);                          // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'elijahkungu100@gmail.com';                 // SMTP username of gmail
    $mail->Password = '0743770216';                           // SMTP password of gmail
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('elijahkungu100@gmail.com', 'study'); // provide your gmail username
    $mail->addAddress('elijahkungu100@gmail.com', 'study');     // Add a recipient
    $mail->addReplyTo('elijahkungu100@gmail.com', 'Information');

    //Content
    $mail->isHTML(true);                          // Set email format to HTML
     $mail->Subject = 'Register client details and total client details';
     $mail->Body= "$emailTextHtml";    //write the html code
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
     
?>