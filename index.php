<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

header(
    "Access-Control-Allow-Origin: http://localhost:5173"
    //. $_ENV['ALLOWED_ORIGIN']
);
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

$postData = file_get_contents('php://input');
$postData = json_decode($postData, false);

if ($postData !== null) {
    $lastname = $postData->lastname;
    $firstname = $postData->firstname;
    $email = $postData->email;
    $message = nl2br($postData->message);
    $phone = $postData->phone;

    echo $message;

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_OFF;
        $mail->isSMTP();
        $mail->Host       = $_ENV['HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USERNAME'];
        $mail->Password   = $_ENV['SMTP_PASSWORD'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = $_ENV['PORT'];

        $mail->setFrom($email);
        $mail->addAddress($_ENV['RECIPIENT']);
        $mail->addAddress($_ENV['RECIPIENT2']);
        $mail->addReplyTo($email);

        //Content
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Message via votre site web';
        $mail->Body = "Message de <b>$firstname $lastname</b>, envoyé depuis le formulaire de contact de votre site : <br><br> $message  <br><br> <u>Coordonnées de contact</u>  <br> Téléphone : $phone  <br> Adresse mail : $email";

        $sent = $mail->send();
        if ($sent) {
            $response = array(
                'status' => 'success',
                'message' => 'Message sent successfully'
            );
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'Message could not be sent'
            );
        }
        echo json_encode($response);
        return;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
