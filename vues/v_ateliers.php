<div id="illustration">
	<img  id="picnic_equipe" src="images/Picnic_equipe.jpg" alt="SJP_Picnic_equipe"/>
</div>
<div id="description">
<h2> Les ateliers envisagés pour la journée d'intégration sont : </h2>

    <table>
        <tr> <th>Atelier</th> <th>Durée</th> <th>Besoin ordi</th> <th>Capacité</th> </tr>
        <?php
		foreach ($lesAteliers as $atelier) {
			echo "<tr> <td>".$atelier->getLibelle()."</td>";
                        echo "<td>".$atelier->getDuree()."</td>";
                        echo "<td>".$atelier->getBesoinordi()."</td>";
                        echo "<td>".$atelier->getCapacite()."</td> </tr>";
		}
                ?>
    </table>
</div>
<br>