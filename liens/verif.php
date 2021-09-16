<?php
function identifier_verification()
{
	$email = $_POST["email"];
	$mdp = $_POST["pass"];
	$data = file_get_contents("liste_identifiant.json");
	$obj = json_decode($data);
	define('PREFIX_SALT', 'ecole');
    define('SUFFIX_SALT', 'dfkrengjt');
    $hash = md5(PREFIX_SALT.$mdp.SUFFIX_SALT);
    echo($email.$mdp);
	if ($email == $obj[0]->email && $hash == $obj[0]->mdp)
	{
	    setcookie("connecter",$email,time()+5416415516,"/");
	    header('Location: lecture.php');	
	}

}
identifier_verification();
?>