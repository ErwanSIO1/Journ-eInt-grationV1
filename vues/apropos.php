<html>
<div id="illustration">
	<img  id="picnic_equipe" src="images/Picnic_equipe.jpg" alt="SJP_Picnic_equipe"/>
</div>
<div id="description">
<h2> L'équipe ayant créé cette application est composée de : </h2>
<?php
	foreach ($collectionDeveloppeurs as $developpeur) {
		echo $developpeur->getNom(). " ". $developpeur->getPrenom().
                        "<a href='vues/actions/supprimerDeveloppeur.php?nom=".$developpeur->getNom()."'> Supprimer</a>".
                        "<a href='vues/actions/ajouterDeveloppeur.php?nom=".$developpeur->getNom()."'> Ajouter</a>".
                        "<a href='vues/actions/modifierDeveloppeur.php?nom=".$developpeur->getNom()."'> Modifier</a>".
                        "<br><br>";
	}
?>
</div>
</html>
