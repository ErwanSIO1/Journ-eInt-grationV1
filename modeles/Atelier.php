<?php

class Atelier {
    private $libelle;
    private $duree;
    private $besoinordi;
    private $capacite;
 
    public function __construct($libelle, $duree, $besoinordi, $capacite){
        $this->libelle = $libelle;
        $this->duree = $duree;
        $this->besoinordi = $besoinordi;
        $this->capacite = $capacite;
    }
    
    public function getLibelle(){
        return $this->libelle;
    }
    public function getDuree(){
        return $this->duree;
    }
    public function getBesoinordi(){
        return $this->besoinordi;
    }
    public function getCapacite(){
        return $this->capacite;
    }
 }
?>