<?php
include("Base.php");
$connexionBD = new Base('consultSIO2Integration','pwd2Consult');
$resultatDeLaRequete=$connexionBD->query("SELECT * FROM Developpeur;");
$lesDeveloppeurs = $resultatDeLaRequete->fetchAll();
var_dump($lesDeveloppeurs);

?>