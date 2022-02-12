<?php
$emailTextHtml='<h1>email sent from php use by phpmailer</h1>';

require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer(true);                          // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'demo@gmail.com';                 // SMTP username of gmail
    $mail->Password = '2345678';                           // SMTP password of gmail
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('anupam@gmail.com', 'study'); // provide your gmail username 
    $mail->addAddress('komal@gmail.com', 'study');     // Add a recipient
    $mail->addReplyTo('anupamverma@gmail.com', 'Information');

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