<!doctype HTML>
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
			<h1>Fancy Text Inputs</h1>
				  <div class="question">
				    <input type="text" required/>
				    <label>Nom (requis)</label>
				  </div>
				  <div class="question">
				    <input type="text" required/>
				    <label>Email (requis)</label>
				  </div>
				  <div class="question">
				    <input type="text" required/>
				    <label>Sujet</label>
				  </div>
				  <div class="question">
				    <input type="text" required/>
				    <label>Message</label>
				  </div>
				  <button>Envoie</button>
			</form>	 
		</div >
      </body>
</html>	