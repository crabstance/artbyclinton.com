<?php

require 'scripts/class.simple_mail.php';

$realname=	  	$_POST["realname"];
$email=		  	$_POST["email"];
$phone=		  	$_POST["phone"];
$contact-type=  $_POST["contact-type"];
$msg=			$_POST["msg"];

// build email msg //
$msg=  'Name:\r\n';
$msg.= '==============================\r\n';
$msg.= $realname. '\r\n';
$msg.= '\r\n';
$msg.= 'E-mail:\r\n';
$msg.= '==============================\r\n';
$msg.= $email. '\r\n';
$msg.= '\r\n';
$msg.= 'Phone:\r\n';
$msg.= '==============================\r\n';
$msg.= $phone. '\r\n';
$msg.= '\r\n';
$msg.= 'Contact Preference:\r\n';
$msg.= '==============================\r\n';
$msg.= 'By '. $contact-type. '\r\n';
$msg.= '\r\n';
$msg.= 'Message:\r\n';
$msg.= '==============================\r\n';
$msg.= $msg. '\r\n';
$msg.= '\r\n';
$msg.= '==============================\r\n';


/* @var SimpleMail $mail */
$mail = new SimpleMail();
$mail->setTo('clinton@artbyclinton.com', 'Recipient 1')
     ->setSubject('[Contact Form] ('. $realname. ') from Artbyclinton.com')
     ->setFrom($email, $realname)
     ->addMailHeader('Reply-To', $email, $realname)
     ->addGenericHeader('X-Mailer', 'PHP/' . phpversion())
     ->addGenericHeader('Content-Type', 'text/html; charset="utf-8"')
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
