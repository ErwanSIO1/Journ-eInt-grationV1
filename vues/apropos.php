<html>
<div id="illustration">
	<img  id="picnic_equipe" src="images/Picnic_equipe.jpg" alt="SJP_Picnic_equipe"/>
</div>
<div id="description">
<h2> L'équipe ayant créé cette application est composée de : </h2>
<?php
	foreach ($collectionDeveloppeurs as $developpeur) {
		echo $developpeur->getNom(). " ". $developpeur->getPrenom()."<br />";
	}
?>
</div>
</html>