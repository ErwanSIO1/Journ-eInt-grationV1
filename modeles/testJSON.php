<?php
echo "Hello world";
include("fichierJSON.php");
$connexionJSON = new FichierJSON();
//$lesSalles=$connexionJSON->setFile("../JSON/exempleInfosSalles.json");
$lesSalles=$connexionJSON->getLesSalles();
var_dump($lesSalles);

?>