<?php
echo "Hello world";
include("fichierJSON.php");
$connexionJSON = new FichierJSON();
$lesSalles=$connexionJSON->getLesSalles();
var_dump($lesSalles);

?>