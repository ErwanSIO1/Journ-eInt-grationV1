<?php

echo "<table> <tr> <th>Nom</th> <th>Type</th> <th>Capacité</th> <th>Nombre d'ordinateurs</th> <th>Vidéo projecteur</th> </tr>";

    foreach ($lesSalles as $salle){
        echo "<tr> <td>".$salle->getNom()."</td>";
        echo "<td>".$salle->getType()."</td>";
        echo "<td>".$salle->getCapacite()."</td>";
        echo "<td>".$salle->getNbOrdinateurs()."</td>";
        echo "<td>";
        if($salle->getVideoprojecteur() == true){
            echo "Présent";
        }else{
            echo "Non présent";
        }
            echo "</td> </tr>";
            
    }

echo"</table>";