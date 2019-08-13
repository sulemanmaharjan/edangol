<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (!$_POST) {
    header("Location: emailform.php");
}
$toemail=$_REQUEST['to'];
$subject=$_REQUEST['subject'];
$msg=$_REQUEST['msg'];
    

require 'phpmail/Exception.php';
require 'phpmail/PHPMailer.php';
require 'phpmail/SMTP.php';
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host="smtp.gmail.com";
        $mail->SMTPAuth   = true;
        $mail->Username='sarmila2basnet@gmail.com';
        $mail->Password='SPAN1234';
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;
        $mail->setFrom('sarmila2basnet@gmail.com', "cutie pie");
        $mail->addAddress($toemail, "Dear Customer");
        
        $mail->Subject=$subject;
        $mail->Body=$msg;
        $mail->send();
        echo 'email sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
