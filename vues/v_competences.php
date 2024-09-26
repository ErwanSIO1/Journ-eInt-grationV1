<html>
<div id="illustration">
	<img  id="picnic_equipe" src="images/Picnic_equipe.jpg" alt="SJP_Picnic_equipe"/>
</div>
<div id="description">
<h2> Les différentes compétences : </h2>
<?php
	foreach ($collectionCompetences as $competence) {
		echo $competence->getNom().
                "<a href='vues/actions/supprimerDeveloppeur.php?nom=".$competence->getNom()."'> Supprimer</a>".
                "<a href='vues/actions/ajouterDeveloppeur.php?nom=".$competence->getNom()."'> Ajouter</a>".
                "<a href='vues/actions/modifierDeveloppeur.php?nom=".$competence->getNom()."'> Modifier</a>".
                "<br><br>";
	}
?>
</div>
</html>