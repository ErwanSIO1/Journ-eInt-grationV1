<?php
include ("modeles/Base.php");
if (isset($_GET['action']))
    $action=filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else 
    $action= "accueil";
    

switch ($action){
    case 'accueil'  : include("vues/accueil.html"); break;

    case 'aPropos'  :  $connexionBD = new Base('consultSIO2Integration','pwd2Consult');
                       $resultatDeLaRequete=$connexionBD->query("SELECT nom, prenom FROM Developpeur;");
                       $lesDeveloppeurs = $resultatDeLaRequete->fetchAll();
                       include("vues/aPropos.php");
                       break;
                   
}

