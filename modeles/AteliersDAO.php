<?php
include("modeles/Atelier.php");

class AteliersDAO {
    private $file;

public function __construct($nomFichierFourni="ateliers.xml"){
    $this->file ="modeles/".$nomFichierFourni;
}

public function getLesAteliers(){
    try{
        $contenuXMLRecup = simplexml_load_file($this->file);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    
    //application du design pattern DAO
    foreach($contenuXMLRecup as $unAtelier){
        $unObjetAtelier = new Atelier($unAtelier->libelle,$unAtelier->duree,$unAtelier->besoinordi,$unAtelier->capacite);
        $listeObjAteliers[] = $unObjetAtelier;
    }
    
    return $listeObjAteliers;
}
}