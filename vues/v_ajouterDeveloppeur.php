<?php
include("../modeles/Base.php");
include("../modeles/DeveloppeurDAO.php");

?>
<form action="/index.php?controleur=gestionDeveloppeur&action=ajouterDeveloppeur" method="POST">
  <div>
    <label for="prenom">Prenom :</label>
    <input name="prenom" id="prenom"/>
  </div>
  <div>
    <label for="nom">Nom :</label>
    <input name="nom" id="nom"/>
  </div>
  <div>
    <button>Ajouter</button>
  </div>
</form>
