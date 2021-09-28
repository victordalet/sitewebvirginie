<?php

	$date = date("(d.m.y ; H:i) : ");
	$document = fopen("messagerie.json","c+"); 
	fseek($document, filesize('messagerie.json'));
	fwrite($document, '<span class="nom">'.$_POST["name"].'</span>'.'<span class="date">'.$date.'</span>'.'<span class="email">'.$_POST["email"].'</span>'.'<span class="sujet">'.$_POST["sujet"].'</span>'.'<span class="message">'.$_POST["message"].'</span>'.'<br>'."\n" ); 


	$to      = 'virginiesophie.duhamel@orange.fr';
	$subject = $_POST['sujet'];
	$message = $_POST['message'];
	$headers = 'From:'.$_POST['email'] . "\r\n" .
	'Reply-To: webmaster@example.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
	header('Location: contact.php' );

?>