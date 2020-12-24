<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

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
$mail->setFrom('sarmila2basnet@gmail.com',"cutie pie");
$mail->addAddress('sarmila2basnet@gmail.com',"moti");
$mail->addAddress('subihanideepa@gmail.com',"de");
$mail->Subject="hello get well soon";
$mail->Body="hi de how r u get well soon . missin g u lots!!!! see u soon.";
$mail->send();
echo 'email sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    ?>
</body>
</html>