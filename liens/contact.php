!doctype HTML>
<html lang="fr">
      <head> 
	      <title> CONTACT VIRGINIE DUHAMEL  </title> <!--le titre de la page -->
		<link rel="stylesheet" type="text/css" href="../css/style_div.css"> <!-- on imparte le css -->
		<link rel="stylesheet" type="text/css" href="../css/style_image.css"> <!-- on imparte le css -->
		<link rel="stylesheet" type="text/css" href="../css/style_police.css"> <!-- on imparte le css -->
		<link rel="stylesheet" type="text/css" href="../css/style_bouton.css"> <!-- on imparte le css -->
		<script src="../js/galerie.js"></script> <!-- on import le js -->
		<script src="../js/redirection.js"></script> <!-- on import le js -->
	      <link rel="icon" type="image/png" href="../images/logo.png" /> <!-- logo à coté du titre-->
	</head>
	        
	<body>
		<div onclick="redirect(0,2);" class="btn from-left">Virginie</div> 
		<div onclick="redirect(1,2);" class="btn from-left">Collage</div>
		<div onclick="redirect(2,2);" class="btn from-left">Peinture</div>
		<div onclick="redirect(3,2);" class="btn from-left">Contact</div> 				
		<div id="formulaire">
			<form method = "POST" id="envoie" action = "envoie.php">
			<label for="name">Nom (requis)</label><br><input id="name" name="name" type="text" required/> <br/>
			<label for="email">Email (requis)</label><br><input id="email" name="email" type="text" required/> <br/>
			<label for="sujet">Sujet</label><br><input id="sujet" name="sujet" type="text"/> <br/>
		      <label for="message">Message</label><br><textarea id="message" name="message" placeholder="Votre message..."></textarea> <br>	
			<button id="send" type="submit"><img alt="envoie" src="../images/send.png"></button>
		</form>	 
		</div >
      </body>
</html>	