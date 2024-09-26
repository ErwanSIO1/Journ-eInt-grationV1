<?php
include("modeles/DeveloppeurDAO.php");

if (isset($_GET['action']))
    $action=filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else 
    $action= "accueil";
    

switch ($action){
    case 'aPropos'  :  $connexionSourceDonnees = new DeveloppeurDAO();
                       $collectionDeveloppeurs = $connexionSourceDonnees->getLesDeveloppeurs();
                       include("vues/apropos.php");
                       break;
}
