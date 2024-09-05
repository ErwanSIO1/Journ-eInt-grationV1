<div id="illustration">
	<img  id="picnic_equipe" src="images/Picnic_equipe.jpg" alt="SJP_Picnic_equipe"/>
</div>
<div id="description">
<h2> Les ateliers envisagés pour la journée d'intégration sont : </h2>
            <?php
		foreach ($lesAteliers as $atelier) {
			echo $atelier->libelle."<br />";
		}
            ?>
</div>