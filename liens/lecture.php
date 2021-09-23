<!doctype HTML>
<html lang="fr">
	<head>
	    <title> REDIRECTION VIRGINIE DUHAMEL </title>
		<link rel="stylesheet" type="text/css" href="../css/style_lecture.css"> <!-- on imparte le css -->
	    <link rel="icon" type="image/png" href="../images/logo.png" /> <!-- logo à coté du titre-->
	</head>
    <body>	
	   	<div class="context" style="overflow-y:scroll;">
	        <?php
				if (isset($_COOKIE["connecter"]))
				{
					$text = file_get_contents('messagerie.json');
					echo $text; 
				}
				else 
				{
					header('Location: connexion/connexion.html');
				}
			?>
    	</div>


<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >
		</section>
	</body>
</html>