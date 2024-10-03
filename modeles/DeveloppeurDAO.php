<?php
include_once ("Base.php");
include_once ("Developpeur.php");
class DeveloppeurDAO extends Base{
    
    public function __construct(){
        parent::__construct('tp_sio2_bdjourneeintegration','consultSIO2Integration','pwd2Consult');
    }
    
    public function getLesDeveloppeurs(){
        $resultatDeLaRequete=$this->query("SELECT * FROM Developpeur;");
        $tableauDeveloppeurs = $resultatDeLaRequete->fetchAll();
        $lesObjDeveloppeurs = array();
        foreach($tableauDeveloppeurs as $uneLigneUnDeveloppeurs){
            $unDeveloppeur = new Developpeur($uneLigneUnDeveloppeurs["id"],$uneLigneUnDeveloppeurs["prenom"],$uneLigneUnDeveloppeurs["nom"]);
            $lesObjDeveloppeurs[] = $unDeveloppeur;
        }
        return $lesObjDeveloppeurs;
    }
    
    public function deleteDeveloppeur($id){
        $resultatDeLaRequete=$this->exec("DELETE id,nom,prenom FROM Developpeur WHERE id=".$id.";");
        return $resultatDeLaRequete;
    }
    
    public function addDeveloppeur($id){
        $resultatDeLaRequete=$this->exec(" WHERE nom=".$id.";");
        return $resultatDeLaRequete;
    }
    
    public function editDeveloppeur($id){
        $resultatDeLaRequete=$this->exec(" WHERE nom=".$id.";");
        return $resultatDeLaRequete;
    }
    
}