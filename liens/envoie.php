<?php
$date = date("(d.m.y ; H:i) : "); //la date de l'envoie du message
$document = fopen("messagerie.json","c+"); // on ouvre le fichier 
fseek($document, filesize('messagerie.json'));
fwrite($document, '<span class="nom">'.$_POST["name"].'</span>'.'<span class="date">'.$date.'</span>'.'<span class="email">'.$_POST["email"].'</span>'.'<span class="sujet">'.$_POST["sujet"].'</span>'.'<span class="message">'.$_POST["message"].'</span>'.'<br>'."\n" ); 
header('Location: contact.php' );
?>