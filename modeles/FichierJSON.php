   <?php

/**
 * Classe qui permet d'extraire des données des ateliers
 * stockées dans un fichier xml
 * @author Utilisateur
 */
class FichierJSON {

  private $file; // nom du fichier XML contenant les données
  
/**
 * fonction qui permet d'affecter le fichier à utiliser
 *
 * @author Utilisateur
 */
 public function setFile($nomFichier)
 {
  $this->file = $nomFichier;
 }
 
 public function __construct($nomFichierFourni="exempleInfosSalles.json"){
    $this->setFile("../JSON/".$nomFichierFourni);
 }
 

/**
 * 
 * getLesAteliers est une méthode qui construit la liste des ateliers 
 * à partir des données issues du fichier XML
 */
public function getLesSalles(){
	
   try {
        $contenuJSONRecup = json_decode($this->file);        
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
    return $contenuJSONRecup;
}

}
