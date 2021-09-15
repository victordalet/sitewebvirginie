<!doctype HTML>
<html lang="fr">
	<head>
	    <title> REDIRECTION VIRGINIE DUHAMEL </title>
		<link rel="stylesheet" type="text/css" href="../css/style_div.css"> <!-- on imparte le css -->
		<link rel="stylesheet" type="text/css" href="../css/style_image.css"> <!-- on imparte le css -->
		<link rel="stylesheet" type="text/css" href="../css/style_police.css"> <!-- on imparte le css -->
		<link rel="stylesheet" type="text/css" href="../css/style_bouton.css"> <!-- on imparte le css -->
		<script src="../js/galerie.js"></script> <!-- on import le js -->
		<script src="../js/redirection.js"></script> <!-- on import le js -->
	    <link rel="icon" type="image/png" href="../images/logo.png" /> <!-- logo à coté du titre-->
	</head>
    <body>	
    	<?php
		$date = date("(d.m.y ; H:i) : "); //la date de l'envoie du message
		$document = fopen("messagerie.json","c+"); // on ouvre le fichier 
		fseek($document, filesize('messagerie.json'));
		fwrite($document, '<span class="nom">'.$_POST["name"].'</span>'.'<span class="date">'.$date.'</span><span class="email">'.$_POST["email"].'</span><span class="sujet">'.$_POST["sujet"].'</span><span class="message">'.$_POST["message"].'</span><br>"."\n" ); // on ajoute dans le json la personne la date suivit de son message
		header('Location: http://localhost/sitewebvirginie/liens/contact.php'); // on redirige vers la messagerie
        ?>	
	</body>
</html>