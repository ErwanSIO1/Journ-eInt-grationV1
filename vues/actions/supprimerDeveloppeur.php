<?php
include("../../modeles/Base.php");
include("../../modeles/DeveloppeurDAO.php");
$connexionSourceDonnees = new DeveloppeurDAO();
$connexionSourceDonnees->deleteDeveloppeur($_GET['nom']);