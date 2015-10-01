<!-- La gestion des cookies, sauf les messages, s'effectue tout le temps dans l'entete, au début. 
Les cookies sont des variables stockées chez le client, pour un gain de place sur le serveur.
On y met des informations "inutiles" pour notre application.
Toujours mettre à jour notre cookie pour éviter un décalage :
		setcookie("nom",$_POST["nom"]);
		$_COOKIE["nom"]=$_POST["nom"];
		
Dans cet exemple précis , des tests n'ont pas été réalisés ...
-->



<?php
if(isset($_POST['submit']))
{
	if(!isset($_COOKIE["connexion"])) // ou de nom,bref première fois
	{
		setcookie("nom",$_POST["nom"]);
		$_COOKIE["nom"]=$_POST["nom"];
		
		setcookie("connexion",1);
		$_COOKIE["connexion"]=1;
		
		echo 'Bonjour '.$_COOKIE["nom"].' ,je suis ravi de faire votre connaissance !!';
	}
	else if($_COOKIE["connexion"]>0 && $_COOKIE["connexion"]<6)
	{
		setcookie("connexion",$_COOKIE["connexion"]+1);
		$_COOKIE["connexion"]=$_COOKIE["connexion"]+1;
		echo 'Salut '.$_COOKIE["nom"].' ,c\' est la '.$_COOKIE["connexion"].' ème fois que tu accèdes à mon site.';
	}
	else
	{
		echo 'Bienvenue '.$_COOKIE["nom"]', bienvenue sur mon site !';
	}
	
}
?>

<!DOCTYPE html>
<html>

<head>
      <title>Cookies and co</title>
	  <meta charset="utf-8" />
</head>
<body>

<?php 
if(!isset($_COOKIE["nom"])) 
{
	echo ' Bonjour, je ne vous connais pas, c’est la 1ère fois que vous accédez à cette page. Veuillez saisir votre prénom :';

	echo '<form method="post" action="#" >';
	echo '<input type="text" name="nom"/><input type="submit" name="submit" value="OK" />';
	echo '</form>';
}


?>



</body>
</html>