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
        foreach($tableauDeveloppeurs as $uneLigneUnDeveloppeur){
            $unDeveloppeur = new Developpeur($uneLigneUnDeveloppeur["id"],$uneLigneUnDeveloppeur["prenom"],$uneLigneUnDeveloppeur["nom"]);
            $lesObjDeveloppeurs[] = $unDeveloppeur;
        }
        return $lesObjDeveloppeurs;
    }
    
    public function deleteDeveloppeur($id){
        $resultatDeLaRequete=$this->exec("DELETE FROM Developpeur WHERE id=".$id.";");
        return $resultatDeLaRequete;
    }
    
    public function addDeveloppeur($nom,$prenom){
        $resultatDeLaRequete=$this->exec("INSERT INTO Developpeur (`nom`, `prenom`) VALUES('".$nom."','".$prenom."');");
        return $resultatDeLaRequete;
    }
    
    public function editDeveloppeur($id, $nom, $prenom){
        $resultatDeLaRequete=$this->exec("UPDATE `Developpeur` SET `nom`='".$nom."',`prenom`='".$prenom."' WHERE id=".$id.";");
        return $resultatDeLaRequete;
    }
    
}