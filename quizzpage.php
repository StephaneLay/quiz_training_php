<?php
require "contents/questions.php";
echo "<h1>prout : ".$_GET['category']."</h1>";
echo $questionnaires[$_GET['category']];

// IL FAUT :
// CREER LE DISPLAY DE QUESTIONS , LE COMPTEUR DE POINTS , LE QUESITON TRACKER ETC DANS CE FICHIER !
//PUIS CODER LES CONDITIONS DE WIN ET DE LOOSE AUSSI ET VERIFIER SI CA FONCTIONNE.