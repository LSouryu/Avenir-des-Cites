<?php 

// $mysqli->set_charset("utf8");
// ------- SESSION 
session_start();
// ------- CHEMIN 
// print_r($_SERVER);
define("RACINE_SITE", "http://" . $_SERVER['HTTP_HOST'] . "/");


$contenu = "";
// titre onglet
$title = "";

