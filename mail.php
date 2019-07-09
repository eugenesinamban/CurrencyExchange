<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\xampp\composer\vendor\autoload.php';

$mail = new PHPMailer(TRUE);
include "comment_handles.php";
try {
   
   $mail->setFrom('from@mail.com', 'Mail Sender');
   $mail->addAddress('to@mail.com', 'Mail Recepient');
   $mail->Subject = 'Comments From: '. $from;
   $mail->Body = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
   
   /* SMTP parameters. */
   
   /* Tells PHPMailer to use SMTP. */
   $mail->isSMTP();
   
   /* SMTP server address. */
   $mail->Host = 'smtp.gmail.com';

   /* Use SMTP authentication. */
   $mail->SMTPAuth = TRUE;
   
   /* Set the encryption system. */
   $mail->SMTPSecure = 'tls';
   
   /* SMTP authentication username. */
   $mail->Username = 'own.email@mail.com';
   
   /* SMTP authentication password. */
   $mail->Password = '**************';
   
   /* Set the SMTP port. */
   $mail->Port = 587;
   
   /* Finally send the mail. */
   $mail->send();
    header("location:comment_confirm.php");
}
catch (Exception $e)
{
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   echo $e->getMessage();
}
