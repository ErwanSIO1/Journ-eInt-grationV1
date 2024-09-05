<?php
include("fichierXML.php");
$connexionXML = new FichierXML();
$lesAteliers=$connexionXML->getLesAteliers();
var_dump($lesAteliers);

?>