<?php
require_once("../inc/init.inc.php");
if(!internauteEstConnecteEtEstAdmin())
{
	header("location:../connexion.php");
	exit();
}
if(isset($_GET['msg']) && $_GET['msg'] == "supok")
{
	executeRequete("delete from membre where id_membre=$_GET[id_membre]");
	header("Location:gestion_membre.php");
}
//-------------------------------------------------- Affichage ---------------------------------------------------------//
require_once("../inc/haut.inc.php");
require_once("../inc/fonction.inc.php");
echo '<h1> Voici les membres inscrit au site </h1>';
	$resultat = executeRequete("SELECT * FROM membre");
	echo "Nombre de membre(s) : " . $resultat->num_rows;
	echo "<table style='border-color:red' border=10> <tr>";
	while($colonne = $resultat->fetch_field())
	{    
		echo '<th>' . $colonne->name . '</th>';
	}
	echo '<th> Supprimer </th>';
	echo "</tr>";
	while ($membre = $resultat->fetch_assoc())
	{
		echo '<tr>';
		foreach ($membre as $information)
		{
			echo '<td>' . $information . '</td>';
		}
		echo "<td><a href='gestion_membre.php?msg=supok&&id_membre=" . $membre['id_membre'] . "' onclick='return(confirm(\"Etes-vous sur de vouloir supprimer ce membre?\"));'> X </a></td>";
		echo '</tr>';
	}
	echo '</table>';
