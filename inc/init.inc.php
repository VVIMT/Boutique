<?php
//--------- BDD
//$mysqli = new mysqli("51.83.74.152", "root", ")aWp05QZQ(", "site");
//if ($mysqli->connect_error) die('Un probleme est survenu lors de la tentative de connexion a la BDD : ' . $mysqli->connect_error);

$dbhost = "51.83.74.152";
$dbuser = "root";
$dbpass = ")aWp05QZQ(";
$db = "boutique";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

// $mysqli->set_charset("utf8");
 
//--------- SESSION
session_start();

//--------- CHEMIN
define("RACINE_SITE","/Boutique/");
 
//--------- VARIABLES
$contenu = '';
 
//--------- AUTRES INCLUSIONS
require_once("fonction.inc.php");
