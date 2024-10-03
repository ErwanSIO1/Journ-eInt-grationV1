<?php
include("modeles/DeveloppeurDAO.php");

if (isset($_GET['action']))
    $action=filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else 
    $action= "accueil";
    

switch ($action){
    case 'aPropos'  :   $connexionSourceDonnees = new DeveloppeurDAO();
                        $collectionDeveloppeurs = $connexionSourceDonnees->getLesDeveloppeurs();
                        include("vues/apropos.php");
                        break;
    case 'ajouterDeveloppeur'  : 
                        $connexionSourceDonnees = new DeveloppeurDAO();
                        $connexionSourceDonnees->addDeveloppeur($_GET['id']);
                        include("vues/apropos.php");
                        break;


    case 'modifierDeveloppeur'  :  
                        $connexionSourceDonnees = new DeveloppeurDAO();
                        $connexionSourceDonnees->editDeveloppeur($_GET['nom']);
                        include("vues/apropos.php");
                        break;
    case 'supprimerDeveloppeur'  :  
                        $connexionSourceDonnees = new DeveloppeurDAO();
                        $connexionSourceDonnees->deleteDeveloppeur($_GET['nom']);
                        $collectionDeveloppeurs = $connexionSourceDonnees->getLesDeveloppeurs();
                        include("vues/apropos.php");
                        break;
}
