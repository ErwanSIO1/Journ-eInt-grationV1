<?php

if (isset($_GET['action']))
    $action=filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else 
    $action= "accueil";
    

switch ($action){
    case 'accueil'  : include("vues/accueil.html"); break;
                   
    case 'salles' :     include("modeles/fichierJSON.php");
                        $connexionJSON = new FichierJSON();
                        $lesSalles=$connexionJSON->getLesSalles();
                        
                        
                        include("vues/salles.php");
                        echo"</table>";
                        break;
                   
}