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
                        $collectionDeveloppeurs = $connexionSourceDonnees->getLesDeveloppeurs();
                        include("vues/v_formulaire?=action=ajouterDeveloppeur.php");
                        break;
    case 'developpeurAjoute' : 
                       $prenom = $_POST['prenom'];
                       $nom = $_POST['nom'];
                       $connexionSourceDonnees =  new DeveloppeurDAO();
                       $resultat = $connexionSourceDonnees->addDeveloppeur($nom,$prenom);
                       include("vues/v_developpeurAjoute.php");
                       break;
                   
    case 'modifierDeveloppeur'  :  
                        $connexionSourceDonnees = new DeveloppeurDAO();
                        $connexionSourceDonnees->editDeveloppeur($_GET['id']);
                        $collectionDeveloppeurs = $connexionSourceDonnees->getLesDeveloppeurs();
                        include("vues/apropos.php");
                        break;
    case 'developpeurModifie'  :  
                       $prenom = $_POST['prenom'];
                       $nom = $_POST['nom'];
                       $connexionSourceDonnees =  new DeveloppeurDAO();
                       $resultat = $connexionSourceDonnees->editDeveloppeur($nom,$prenom);
                       include("vues/v_developpeurAjoute.php");
                       break;
                    
    case 'supprimerDeveloppeur'  :  
                        $connexionSourceDonnees = new DeveloppeurDAO();
                        $connexionSourceDonnees->deleteDeveloppeur($_GET['id']);
                        $collectionDeveloppeurs = $connexionSourceDonnees->getLesDeveloppeurs();
                        include("vues/apropos.php");
                        break;
}
