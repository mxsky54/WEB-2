<!DOCTYPE Html>
<html>
<head>
<title>Formulaires</title>
<meta charset="UTF-8">  
<style type="text/css">

body
{
background-image:url(background.jpg);
}


</style>           <!-- On définit comme habituellement le charset -->
</head>

<body>
<h1 >Vous et la cuisine</h1>
<form method="post" action="#">                       <!-- Annonce d'un formulaire + envoie par mail -->

<fieldset>																									  <!-- Mise en place du "carré gris" -->
<legend>Informations personelles</legend>																	  <!-- On met un titre au "carré gris" -->
Vous etes : 		<input type="radio" name="Sexe" 	value="f" <?php if (isset($_POST['Sexe'])&& ($_POST['Sexe']=="f")) echo 'checked="checked"' ?>>Une Femme<input type="radio" name="Sexe" value="h" <?php if (isset($_POST['Sexe'])&& ($_POST['Sexe']=="h")) echo 'checked="checked"' ?>>Un Homme<br />			  <!-- Les inputs de type "radio" , un seul peut etre coché -->
Nom : 				<input type="text" name="nom" 		value=<?php if (isset($_POST['nom'])) echo $_POST['nom'] ?> ><br />
Prénom : 			<input type="text" name="prenom" 	value=<?php if (isset($_POST['prenom'])) echo $_POST['prenom'] ?>><br />
Date de naissance : <input type="date" name="naissance" value=<?php if (isset($_POST['naissance'])) echo $_POST['naissance'] ?> /><br/>
Pays d'origine : 	<input type="text" name="pays" 		value=<?php if (isset($_POST['pays'])) echo $_POST['pays'] ?>><br />
</fieldset>


<input type="submit" value="Valider" name="valider" />
</form>


<!-- 
-empty ne fonctionne que pour les variables, pas pour les chaines donc attention !
-toujours faire les vérifications des définitions avec isset
-ne pas oublier les trims
-->
<h1><u>Vérification du formulaire :</u></h1>
<?php
if(isset($_POST['valider']))
{
	if(isset($_POST['Sexe']))
	{
		if($_POST['Sexe']=="f" || $_POST['Sexe']=="h" )
		{
			echo '<p>Les informations concernant le sexe sont correctes<p>';
		}
		else if(empty($_POST['Sexe']))
		{
			echo '<p>Le sexe est absent</p>';
		}
		else
		{
			echo '<p>La valeure correspondant au Sexe est erronnée</p>';
		}
	}
	else
	{
			echo '<p>Valeure Sexe non définie</p>';
	}
	
	if(isset($_POST['nom']))
	{
		if(trim($_POST["nom"])=="")
			echo "<p>Le nom est vide</p>";
		else if(strlen(trim($_POST["nom"]))<3)
			echo "<p>Le nom n'est pas assez long</p>";
		else if(preg_match("/^[a-zA-Z]*$/",$_POST["nom"]))
			echo "<p>Le nom est correctement rempli</p>";
		else
			echo "<p>Le nom n'est pas correctement rempli </p>";
	}
	else
	{
			echo "<p>Le nom n'est pas défini</p>";
	}
	
	if(isset($_POST['prenom']))
	{
		if(trim($_POST["prenom"])=="")
			echo "<p>Le prenom est vide</p>";
		else if(trim(strlen($_POST["nom"]))<2)
			echo "<p>Le prenom n'est pas assez long</p>";
		else if(preg_match("/^[a-zA-Z]*$/",$_POST["prenom"]))
			echo "<p>Le prenom est correctement rempli</p>";
		else
			echo "<p>Le prenom n'est pas correctement rempli </p>";
		
	}
	else
	{
			echo "<p>Le prenom n'est pas défini</p>";
	}
	
	if(isset($_POST['pays']))
	{
		if(trim($_POST["pays"])=="")
			echo "<p>Le pays est vide</p>";
		else if(strlen(trim($_POST["pays"]))<3)
			echo "<p>Le pays n'est pas assez long</p>";
		else if(preg_match("/^[a-zA-Z]*$/",$_POST["pays"]))
			echo "<p>Le pays est correctement rempli</p>";
		else
			echo "<p>Le pays n'est pas correctement rempli </p>";
	}
	else
	{
			echo "<p>Le pays n'est pas défini</p>";
	}
	
	if(isset($_POST['naissance']))
	{
		echo "<p>La date est définie</p>";
	}

}

?>


</body>
</html>