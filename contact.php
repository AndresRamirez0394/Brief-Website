<?php

include("header.html");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if(isset($_POST["sendMail"])){

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $sender = $_POST['email'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'brief.band.mx@gmail.com';
        $mail->Password = 'kooz masl fsal rfkm';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('brief.band.mx@gmail.com', 'BRIEF');
        $mail->addReplyTo($sender, $name);
        $mail->addAddress('brief.band.mx@gmail.com', 'BRIEF');

        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e){
        echo "Message could not be sent. {$mail->ErrorInfo}";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="Styles/contactStyle.css">
</head>
<body>
<div class="wrapper">
        <h1>Contact us:</h1>
        <form action ="contact.php" method="post">
            <input type="text" name = "name" placeholder="Full name">
            <input type="email" name = "email" placeholder="Email">
            <input type="text" name = "subject"placeholder = "Subject">
            <textarea name = "message" placeholder = "Your message"></textarea>
            <button type="submit" name="sendMail">Send...</button>
        </form>
    </div>
</body>
</html>

<?php

include("footer.html");

?>