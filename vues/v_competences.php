<html>
<div id="illustration">
	<img  id="picnic_equipe" src="images/Picnic_equipe.jpg" alt="SJP_Picnic_equipe"/>
</div>
<div id="description">
<h2> Les différentes compétences : </h2>
<?php
	foreach ($collectionCompetences as $competence) {
		echo $competence->getNom()."<br />";
	}
?>
</div>
</html>