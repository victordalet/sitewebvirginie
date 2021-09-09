<!doctype HTML>
<html lang="fr">
      <head> 
	      <title> VIRGINIE DUHAMEL  </title> <!--le titre de la page -->
		<link rel="stylesheet" type="text/css" href="../css/style_div.css"> <!-- on imparte le css -->
		<link rel="stylesheet" type="text/css" href="../css/style_image.css"> <!-- on imparte le css -->
		<link rel="stylesheet" type="text/css" href="../css/style_police.css"> <!-- on imparte le css -->
		<link rel="stylesheet" type="text/css" href="../css/style_bouton.css"> <!-- on imparte le css -->
		<script src="../js/galerie.js"></script> <!-- on import le js -->
	      <link rel="icon" type="image/png" href="../images/logo.png" /> <!-- logo à coté du titre-->
	</head>
	        
	<body>
		<div class="btn from-left">Virginie</div> 
		<div class="btn from-left">Collage</div>
		<div class="btn from-left">Peinture</div>
		<div class="btn from-left">Contacte</div> 					
		<div id="fond_galerie_decore">
			<div id="galerie_decore">
				<h1>
					<button class="guillemet"onclick="nb_image = defilement('droite',nb_image);"> < </button>
					<img id="image_centre" alt="image_centre" src="../images/Collage/image1.jpg">
					<button class="guillemet" onclick="nb_image = defilement('gauche',nb_image);"> > </button>
				</h1>
			</div>
		</div>	
	</body>
</html>