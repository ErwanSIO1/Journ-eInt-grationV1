<?php

class Salles {
    private $nom;
    private $type;
    private $capacité;
    private $nbOrdinateurs;
    private $videoprojecteur;
 
    public function __construct($nom, $type, $capacite, $nbOrdinateurs, $videoprojecteur){
        $this->nom = $nom;
        $this->type = $type;
        $this->capacité = $capacite;
        $this->nbOrdinateurs = $nbOrdinateurs;
        $this->videoprojecteur = $videoprojecteur;
    }
    
    public function getNom(){
        return $this->nom;
    }
    public function getType(){
        return $this->type;
    }
    public function getCapacite(){
        return $this->capacité;
    }
    public function getNbOrdinateurs(){
        return $this->nbOrdinateurs;
    }
    public function getVideoprojecteur(){
        return $this->videoprojecteur;
    }
 }
?>