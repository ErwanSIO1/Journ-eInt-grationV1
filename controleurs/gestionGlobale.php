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
                   
    case 'salles' :    // chemin d'accès à votre fichier JSON
                        $file = '../json/exempleInfosSalles.json'; 
                        // mettre le contenu du fichier dans une variable
                        $data = file_get_contents($file); 
                        // décoder le flux JSON
                        $obj = json_decode($data); 
                        // accéder à l'élément approprié
                        //echo $obj[0]->name;
                        echo $obj->name;
                        
                        
                        //include("vues/aPropos.php");
                        break;
                   
}

