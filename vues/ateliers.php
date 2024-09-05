<div id="illustration">
	<img  id="picnic_equipe" src="images/Picnic_equipe.jpg" alt="SJP_Picnic_equipe"/>
</div>
<div id="description">
<h2> Les ateliers envisagés pour la journée d'intégration sont : </h2>


    <table>
        <tr> <th>Atelier</th> <th>Durée</th> <th>Besoin ordi</th> <th>Capacité</th> </tr>
        <tr><td><?php
		foreach ($lesAteliers as $atelier) {
			echo $atelier->libelle."<br />";
		}
                ?></td>
            <td><?php
		foreach ($lesAteliers as $atelier) {
			echo $atelier->duree."<br />";
		}
                ?></td>
            <td><?php
		foreach ($lesAteliers as $atelier) {
			echo $atelier->besoinordi."<br />";
		}
                ?></td>
            <td><?php
		foreach ($lesAteliers as $atelier) {
			echo $atelier->capacite."<br />";
		}
                ?></td> </tr>
    </table>
</div>