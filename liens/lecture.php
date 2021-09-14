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
		if (isset($_COOKIE["connecter"])) // si connecter on affiche le texte des message sauvegardé dans un json
		{
		$text = file_get_contents('messagerie.json');
		echo $text; 
		}
		else // sinon on redirige vers la page de connexion
		{
			header('Location: connexion.php');
		}
		?>
	</body>
</html>