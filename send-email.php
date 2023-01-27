<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.hostinger.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 465;

$mail->Username = "contact@irrecordings.com";
$mail->Password = "Fuckthatshit@123";

$mail->setFrom($email, $name);
$mail->addAddress("irrecordingsindia@gmail.com", "Client");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

header("Location: sent.php");