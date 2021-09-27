<!doctype HTML>
<html lang="fr">
	<head>
	        <?php
				if (isset($_COOKIE["connecter"]))
				{
					$text = file_get_contents('messagerie.json');
					echo $text; 
				}
				else 
				{
					header('Location: http://virginieduhamel.lescigales.org/liens/connexion/connexion.php');
				}
			?>
	    <title> REDIRECTION VIRGINIE DUHAMEL </title>
		<link rel="stylesheet" type="text/css" href="../css/style_lecture.css"> <!-- on imparte le css -->
	    <link rel="icon" type="image/png" href="images/collage/image11.jpg" /> <!-- logo à coté du titre-->
	</head>
    <body>	
	   	<div class="context" style="overflow-y:scroll;">
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