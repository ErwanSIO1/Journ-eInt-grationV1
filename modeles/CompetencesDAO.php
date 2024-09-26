<?php
include ("modeles/Base.php");
include ("modeles/Competence.php");
class CompetencesDAO extends Base{
    
    public function __construct(){
        parent::__construct('tp_sio2_bdjourneeintegration','consultSIO2Integration','pwd2Consult');
    }
    
    public function getLesCompetences(){
        $resultatDeLaRequete=$this->query("SELECT nom FROM Competence;");
        $tableauCompetences = $resultatDeLaRequete->fetchAll();
        $lesObjCompetences = array();
        foreach($tableauCompetences as $uneLigneUneCompetence){
            $uneCompetence = new Competence($uneLigneUneCompetence["nom"]);
            $lesObjCompetences[] = $uneCompetence;
        }
        return $lesObjCompetences;
    }
    
    public function deleteCompetence($nom){
        $resultatDeLaRequete=$this->exec("DELETE nom, prenom FROM Developpeur WHERE nom=".$nom.";");
        return $resultatDeLaRequete;
    }
    
    public function addCompetence($nom){
        $resultatDeLaRequete=$this->exec(" WHERE nom=".$nom.";");
        return $resultatDeLaRequete;
    }
    
    public function editCompetence($nom){
        $resultatDeLaRequete=$this->exec(" WHERE nom=".$nom.";");
        return $resultatDeLaRequete;
    }
}