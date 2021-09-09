var nb_image = 1;
function defilement(sens,nb_image)
{
	
	if (sens == "gauche")
	{
		nb_image +=1;
		nb_image = limite(nb_image);
		affichage(nb_image);
	}
	else if (sens == "droite")
	{
		nb_image -=1;
		nb_image = limite(nb_image);
		affichage(nb_image);
	}
	return nb_image;
}

function affichage(nb_image)
{
	var new_source = "'../images/collage/image"+nb_image+"jpg'";
	document.getElementById("image_centre").src = new_source;
}

function limite(nb_image)
{
	if(nb_image <= 0)
	{
		nb_image = 62;
	}
	else if (nb_image >= 62)
	{
		nb_image = 1;
	}
	return nb_image
}