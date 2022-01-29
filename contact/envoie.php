<?php

	$date = date("(d.m.y ; H:i) : ");

	$to      = 'virginiesophie.duhamel@orange.fr';
	$subject = 'SITE WEB'.$_POST['sujet'];
	$message = $_POST['message'];
	$headers = 'From:'.$_POST['email'] . "\r\n" .
	'Reply-To: webmaster@example.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
	header('Location: index.html' );

?>