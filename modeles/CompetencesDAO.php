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
    
}