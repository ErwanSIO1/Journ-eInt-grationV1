<?php
include ("modeles/FichierXML.php");
if (isset($_GET['action']))
    $action=filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else 
    $action= "accueil";
    

switch ($action){
    case 'accueil'  : include("vues/accueil.html"); break;

    case 'consultation'  :  $connexionXML = new FichierXML();
                            $lesAteliers = $connexionXML->getLesAteliers();
                            include("vues/ateliers.php");
                            break;
                   
}

