<!doctype HTML>
<html lang="fr">
      <head> 
	      <title> CONTACT VIRGINIE DUHAMEL  </title> <!--le titre de la page -->>
		<link rel="stylesheet" type="text/css" href="../css/style_contact.css"> <!-- on imparte le css -->
		<script src="../js/galerie.js"></script> <!-- on import le js -->
		<script src="../js/redirection.js"></script> <!-- on import le js -->
	      <link rel="icon" type="image/png" href="../images/logo.png" /> <!-- logo à coté du titre-->
	</head>
	        
	<body>
		<form method = "POST" id="envoie" action = "envoie.php">
				<div class="container">
					<div class="row">
							<h1>contacter nous</h1>
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
								<div class="btn-lrg submit-btn">Envoie</div>
							</div>
							<br><br>
					</div>
				</div>
			</form>	 
		</div >
      </body>
</html>	