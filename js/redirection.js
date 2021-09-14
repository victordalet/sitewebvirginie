function redirect(page_number,page_name)
{
	if (page_name == 1)
	{
		redirect_page(page_number);
	}
	else
	{
		redirect_page(page_number);
	}
}

function redirect_page(page_number)
{
	if (page_number == 0)
	{
		document.location.href="index.php";
	}
	else if (page_number == 1)
	{
		document.location.href="liens/galerie.php";
	}
	else if (page_number == 2)
	{
		document.location.href="liens/galerie2.php";
	}
	else if (page_number == 3)
	{
		document.location.href="liens/contact.php";
	}
}

function redirect_page_2(page_number)
{
	if (page_number == 0)
	{
		document.location.href="../index.php";
	}
	else if (page_number == 1)
	{
		document.location.href="galerie.php";
	}
	else if (page_number == 2)
	{
		document.location.href="galerie2.php";
	}
	else if (page_number == 3)
	{
		document.location.href="contact.php";
	}
}