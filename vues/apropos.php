<html>
<div id="illustration">
	<img  id="picnic_equipe" src="images/Picnic_equipe.jpg" alt="SJP_Picnic_equipe"/>
</div>
<div id="description">
<h2> L'équipe ayant créé cette application est composée de : </h2>
<?php
	foreach ($collectionDeveloppeurs as $developpeur) {
		echo $developpeur->getNom(). " ". $developpeur->getPrenom().
                        //"<a href='vues/actions/supprimerDeveloppeur.php?nom=".$developpeur->getNom()."'> Supprimer</a>".
                        "<a href=index.php?controleur=gestionDeveloppeurs&action=supprimerDeveloppeur&id=".$developpeur->getId()."> Supprimer</a>".
                        "<a href=index.php?controleur=gestionDeveloppeurs&action=modifierDeveloppeur&id=".$developpeur->getId()."> Modifier</a>".
                        "<br><br>";
	}
        echo "<button><a href='index.php?controleur=formulaire&action=ajouterDeveloppeur'>Ajouter un développeur</a></button>";
?>
</div>
</html>
