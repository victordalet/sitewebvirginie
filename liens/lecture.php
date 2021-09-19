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
    	<section style="overflow-y:scroll;">
	        <?php
				if (isset($_COOKIE["connecter"])
				{
					$text = file_get_contents('messagerie.json');
					echo $text; 
				}
				else 
				{
					header('Location: connexion/connexion.html');
				}
			?>
		</section>
	</body>
</html>