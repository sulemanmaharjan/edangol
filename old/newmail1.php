<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- bootstrap css cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- bootstrap js cdn -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js
    sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo
    anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</head>
<body>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmail/Exception.php';
require 'phpmail/PHPMailer.php';
require 'phpmail/SMTP.php';
$mail= new PHPMailer(true); 
try {
    $mail->SMTPDebug=3;
    $mail->isSMTP();
    $mail->HOST='smtp.gmail.com';
    $mail->SMTPAUth=true;
    $mail->Username="sarmila2basnet@gmail.com";
    $mail->password='SPAN1234';
    $mail->setFrom('sarmila2basnet@gmail.com', "deepa");
    $mail->addAddress("subihanideepa@gmail.com","deepu");
    $mail->isHTML(true);
    $mail->Subject="this is email fro sarmila";
    $mail->Body="<h1>hi iam deepa i want to be friend of you ok?</h1>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo 'Massage has been sent';
}
catch (Exception $e){
    echo "message could not be sent mailer error:{$mail->ErrorInfo}";

}










?>

    
</body>
</html>