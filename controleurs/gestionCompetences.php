<?php
include("modeles/CompetencesDAO.php");

if (isset($_GET['action']))
    $action=filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else 
    $action= "accueil";
    

switch ($action){
    case 'competences':$connexionSourceDonnees = new CompetencesDAO();
                       $collectionCompetences = $connexionSourceDonnees->getLesCompetences();
                       include("vues/v_competences.php");
                       break;
}
