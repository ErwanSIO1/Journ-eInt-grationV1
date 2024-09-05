   <?php

/**
 * Classe qui permet d'extraire des données des ateliers
 * stockées dans un fichier xml
 * @author Utilisateur
 */
class FichierXML {

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
 
 public function __construct($nomFichierFourni="ateliers.xml"){
    $this->setFile("modeles/".$nomFichierFourni);
 }
 

/**
 * 
 * getLesAteliers est une méthode qui construit la liste des ateliers 
 * à partir des données issues du fichier XML
 */
public function getLesAteliers(){
	
   try {
        $contenuXMLRecup = simplexml_load_file($this->file);        
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
    return $contenuXMLRecup;
}

}
