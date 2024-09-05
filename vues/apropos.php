<div id="illustration">
	<img  id="picnic_equipe" src="images/Picnic_equipe.jpg" alt="SJP_Picnic_equipe"/>
</div>
<div id="description">
<h2> L'équipe ayant créé cette application est composée de : </h2>
	<?php
		foreach ($lesDeveloppeurs as $developpeur) {
			echo $developpeur['nom']. " ". $developpeur['prenom']."<br />";
		}
	?>

</div>