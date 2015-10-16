<?php

require 'scripts/class.simple_mail.php';


$realname=	  	$_POST["realname"];
$email=		  	$_POST["email"];
$phone=		  	$_POST["phone"];
$contacttype=  $_POST["contacttype"];
$message=		$_POST["message"];

// build email msg //
$msg=  "Name:\r\n";
$msg.=  "================================\r\n";
$msg.= $realname. "\r\n\r\n";
$msg.= "E-mail:\r\n";
$msg.=  "================================\r\n";
$msg.= $email. "\r\n\r\n";
$msg.= "Phone:\r\n";
$msg.=  "================================\r\n";
$msg.= $phone. "\r\n\r\n";
$msg.= "Contact Preference:\r\n";
$msg.=  "================================\r\n";
$msg.= "By ". $contacttype. "\r\n\r\n";
$msg.= "Message\r\n";
$msg.=  "================================\r\n";
$msg.= $message;



/* @var SimpleMail $mail */
$mail = new SimpleMail();
$mail->setTo('clinton@artbyclinton.com', 'Recipient 1')
//$mail->setTo('leo.templin@gmail.com', 'Recipient 1')
     ->setSubject('[Contact Form] ('. $realname. ') from Artbyclinton.com')
     ->setFrom($email, $realname)
     ->addMailHeader('Reply-To', $email, $realname)
     ->addGenericHeader('X-Mailer', 'PHP/' . phpversion())
     ->addGenericHeader('Content-Type', 'text/plain; charset="iso-8859-1"')
     ->setMessage( $msg )
     ->setWrap(78);
$send = $mail->send();
//echo $mail->debug();

if ($send) {
    $error= 'Your e-mail has been sent to Clinton, thanks!';
} else {
    $error= 'An error occurred. We could not send your email, please try again or contact Clinton directly by phone.';
}

echo $error;

?>
!