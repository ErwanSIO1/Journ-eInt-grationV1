<?php
include_once ("Base.php");
include_once ("Developpeur.php");
class DeveloppeurDAO extends Base{
    
    public function __construct(){
        parent::__construct('tp_sio2_bdjourneeintegration','consultSIO2Integration','pwd2Consult');
    }
    
    public function getLesDeveloppeurs(){
        $resultatDeLaRequete=$this->query("SELECT nom, prenom FROM Developpeur;");
        $tableauDeveloppeurs = $resultatDeLaRequete->fetchAll();
        $lesObjDeveloppeurs = array();
        foreach($tableauDeveloppeurs as $uneLigneUnDeveloppeurs){
            $unDeveloppeur = new Developpeur($uneLigneUnDeveloppeurs["prenom"],$uneLigneUnDeveloppeurs["nom"]);
            $lesObjDeveloppeurs[] = $unDeveloppeur;
        }
        return $lesObjDeveloppeurs;
    }
    
    public function deleteDeveloppeur($nom){
        $resultatDeLaRequete=$this->exec("DELETE nom, prenom FROM Developpeur WHERE nom=".$nom.";");
        return $resultatDeLaRequete;
    }
    
    public function addDeveloppeur($nom){
        $resultatDeLaRequete=$this->exec(" WHERE nom=".$nom.";");
        return $resultatDeLaRequete;
    }
    
    public function editDeveloppeur($nom){
        $resultatDeLaRequete=$this->exec(" WHERE nom=".$nom.";");
        return $resultatDeLaRequete;
    }
    
}