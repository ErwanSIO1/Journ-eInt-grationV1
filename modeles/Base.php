<?php

class Base {
    private $db;
    
     public function __construct(string $user, string $mdp) {         
		try{
			/* =============================BD LOCALE =============================================== */
			
			/*
			$serveurBdLocal = 'localhost';   				//base locale
			$nomBdLocale = "bdPicNic";
					
			$this->db = new PDO("mysql:host=".$serveurBdLocal.";dbname=".$nomBdLocale,$user,$mdp);
			*/
			
			/* =============================BD DISTANTE =============================================== */
			
			$serveurBdDistant = '83.173.113.66'; // base distante - serveur SGBD domaine SIO
			
			$nomBdDistante = "tp_sio2_bdjourneeintegration";
			$this->db = new PDO("mysql:host=".$serveurBdDistant.";dbname=".$nomBdDistante,$user,$mdp);
			
           		
			
            $this->db->query("SET CHARACTER SET utf8");
           //echo "<br/>connexion réussie.<br/>";
		}
		catch ( PDOException $erreur){
            die("Erreur de connexion à la base de données ".$erreur->getMessage());
		}
    }
	
	
	
	
    //methode publique définie pour pouvoir accéder à la méthode query() de la propriété $db qui est privée.
    public function query($sql) {
        return $this->db->query($sql);
    }
	
	
	
}

