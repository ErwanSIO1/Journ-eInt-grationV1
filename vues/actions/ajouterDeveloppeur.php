<?php
include("../../modeles/Base.php");
include("../../modeles/DeveloppeurDAO.php");
$connexionSourceDonnees = new DeveloppeurDAO();
$connexionSourceDonnees->addDeveloppeur($_GET['nom']);