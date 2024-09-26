<?php

if (isset($_GET['action']))
    $action=filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else 
    $action= "accueil";
    

switch ($action){
    case 'salles' :     include("modeles/SallesDAO.php");
                        $connexionJSON = new SallesDAO();
                        $lesSalles=$connexionJSON->getLesSalles();
                        include("vues/v_salles.php");
                        break;
}