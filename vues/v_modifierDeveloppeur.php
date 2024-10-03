<?php
include("../../modeles/Base.php");
include("../../modeles/DeveloppeurDAO.php");
$connexionSourceDonnees = new DeveloppeurDAO();
$connexionSourceDonnees->editDeveloppeur($_GET['nom']);