<?php

$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

use PHPMailer\PHPMailer\PHPMailer;  //gausah dirubah
use PHPMailer\PHPMailer\Exception;  //gausah dirubah

		require 'phpmailer/src/Exception.php';	//arahkan ke folder phpmailer
		require 'phpmailer/src/PHPMailer.php';	//arahkan ke folder phpmailer
		require 'phpmailer/src/SMTP.php';	//arahkan ke folder phpmailer
		require 'phpmailer/class.phpmailer.php';	//arahkan ke folder phpmailer
		require 'phpmailer/PHPMailerAutoload.php';	//arahkan ke folder phpmailer

$mail = new PHPMailer(true);

if(isset($_POST['submit'])){
    $mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = SMTP::DEBUG_SERVER; 
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
    $mail->Username = 'projectwebfinal@gmail.com';
	$mail->Password = 'jwzmzyirutlrubdn';
				
	//Recipients
	$mail->setFrom('projectwebfinal@gmail.com', 'E-tiket');
	$mail->addAddress($email, $name);     // Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

    $mail->send();
    echo 'Message has been sent';
} else {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>