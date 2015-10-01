<?php 
/*	Différents parcours de nos tableaux

$potesDePromo=array("Benjamin","Sonia","Anthony");
foreach($potesDePromo as $potes)
{
echo $potes.'</br>' ;
}
echo "La taille de mes amis est de ".count($potesDePromo);

for ($i = 0; $i < count($potesDePromo); $i++) {
        echo $potesDePromo[$i];
    }
*/

//Tableau contenant toutes nos informations
$menu = array (
	"Lundi"  => array (	
			"Entrée" 	=>"Salade",
            "Plat"   	=> "Boudin/Purée",
			"Fromage"	=>"Munster",			
			"Dessert"  	=> "Mousse au chocolat"),
		
	"Mardi"  => array (	
			"Entrée" 	=> "Tomates",
            "Plat"   	=> "Couscous",      
			"Dessert"  	=> "Glace"),
			
	"Mercredi"  => array (	
			"Entrée" 	=> "Sardines",
            "Plat"   	=> "Steak/Frites",      
			"Dessert"  	=> "Yaourt"),
			
			
	"Jeudi"  => array (	
			"Entrée" 	=> "Jambon",
            "Plat"   	=> "Paella",      
			"Dessert"  	=> "Gateau"),
			
	"Vendredi"  => array (	
			"Entrée" 	=> "Poireaux vinaigrette",
            "Plat"   	=> "Poisson/Riz",      
			"Dessert"  	=> "Pomme",
			"Digestif"  => "Rhum"),
			);

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Tableaux</title>
</head>
<body>
<table border="1" >
		
		
<!-- Première ligne du tableau -->
<?php
$types=array();
foreach($menu as $jours => $tabplats)
{
	
	foreach($tabplats as $plat => $detail)
	{
		$types[$plat]=$plat;
	}
	
	
	
	echo '<tr>';
	echo '<th></th>';
	
	foreach($types as $type)
	{
		echo '<th>'.$type.'</th>';
		
	}
	echo '</tr>';
	break;
}
//print_r($categorie);
?>

<!-- Reste du tableau -->
<?php
foreach($menu as $jours => $tabplats)
{
	echo '<tr>';
	echo '<td>'.$jours.'</td>';
	
	foreach($tabplats as $plat => $detail)
	{
		echo '<td>'.$detail.'</td>';
		
	}
	echo '</tr>';
	
}
?>
		  

</table>


	
</body>
</html>