<!doctype HTML>
<html lang="fr">
      <head> 
	      <title> CONTACT VIRGINIE DUHAMEL  </title> <!--le titre de la page -->>
		<link rel="stylesheet" type="text/css" href="../css/style_contact.css"> <!-- on imparte le css -->
		<link rel="stylesheet" type="text/css" href="../css/style_bouton.css"> <!-- on imparte le css -->
		<link rel="stylesheet" type="text/css" href="../css/style_footer.css"> <!-- on imparte le css -->
		<script src="../js/galerie.js"></script> <!-- on import le js -->
		<script src="../js/redirection.js"></script> <!-- on import le js -->
	      <link rel="icon" type="image/png" href="../images/logo.png" /> <!-- logo à coté du titre-->
	</head>
	        
	<body>
		<!--==========================================================-->
		<div class="align">
			<div onclick="redirect(0,2);" class="btn from-left">Virginie</div> 
			<div onclick="redirect(1,2);" class="btn from-left">Collage</div>
			<div onclick="redirect(2,2);" class="btn from-left">Peinture</div>
			<div onclick="redirect(3,2);" class="btn from-left">Contact</div> 	
		</div>
		<!--==========================================================-->
		<form method = "POST" id="envoie" action = "envoie.php">
				<div class="container">
					<div class="row">
							<h1>Contactez moi</h1>
					</div>
					<div class="row input-container">
							<div class="col-xs-12">
								<div class="styled-input wide">
									<input type="text" name="name" required />
									<label>Nom (Requis)</label> 
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="styled-input">
									<input type="text" name="email" required />
									<label>Email (Requis)</label> 
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="styled-input" style="float:right;">
									<input type="text" name="sujet"  />
									<label>Sujet</label> 
								</div>
							</div>
							<div class="col-xs-12">
								<div class="styled-input wide">
									<textarea name="message" required></textarea>
									<label>Message</label>
								</div>
							</div>
							<div class="col-xs-12">
								<button class="btn-lrg submit-btn" type="submit"> Envoyer </button>
							</div>
							<br><br>
					</div>
				</div>
			</form>	 
		</div >
		<br><br><br>
      </body>	
      <footer>
      	<h2 class="footer">&copy; Copyright 2021 - Virginie Duhamel </h2>
      	<h2 class="footer"> <a href="mailto:virginesophie.duhamel@orange.fr">Webmail</a> </h2>
      	<h2 > <a href="https://www.instagram.com/collage_peinture_dessin/" target="_blank"><img class="insta" src="../images/insta.png"></a></h2>
      </footer>
</html>	