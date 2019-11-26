<?php
//--------- BDD

$dbhost = "51.83.74.152";
$dbuser = "root";
$dbpass = ")aWp05QZQ(";
$db = "boutique";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $mysqli -> error);


// $mysqli->set_charset("utf8");
 
//--------- SESSION
session_start();

//--------- CHEMIN
define("RACINE_SITE","/Boutique/");
define("IP_ADDRESS", $dbhost);

$devise = htmlspecialchars("€", ENT_QUOTES);
$eaa = htmlspecialchars("é", ENT_QUOTES);
$eag = htmlspecialchars("è", ENT_QUOTES);
$eac = htmlspecialchars("ê", ENT_QUOTES);
$aag = htmlspecialchars("à", ENT_QUOTES);
$iac = htmlspecialchars("î", ENT_QUOTES);
$uac = htmlspecialchars("û", ENT_QUOTES);
$num = htmlspecialchars("º", ENT_QUOTES);

define("DEVISE", $devise);
define("EAA", $eaa);
define("EAG", $eag);
define("EAC", $eac);
define("AAG", $aag);
define("IAC", $iac);
define("UAC", $uac);
define("NUM", $num);

//--------- VARIABLES
$contenu = '';
 
//--------- AUTRES INCLUSIONS
require_once("fonction.inc.php");
