<?php
include("modeles/FichierXML.php");
include("modeles/AteliersDAO.php");
if (isset($_GET['action']))
    $action=filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else 
    $action= "accueil";
    

switch ($action){
    case 'ateliers'  :  include("modeles/SallesDAO.php");
                        $connexionXML = new AteliersDAO();
                        $lesAteliers = $connexionXML->getLesAteliers();
                        include("vues/v_ateliers.php");
                        break;
                   
}

