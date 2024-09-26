<?php

if (isset($_GET['action']))
    $action=filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
else 
    $action= "accueil";
    

switch ($action){
    case 'accueil'  : include("vues/accueil.html"); break;
                   
    case 'salles' :   
                        include("modeles/fichierJSON.php");
                        $connexionJSON = new FichierJSON();
                        $lesSalles=$connexionJSON->getLesSalles();
                        
                        echo "<table> <tr> <th>Nom</th> <th>Type</th> <th>Capacité</th> <th>Nombre d'ordinateurs</th> <th>Vidéo projecteur</th> </tr>";
                        
                            foreach ($lesSalles as $salle) {
                                echo "<tr> <td>".$salle->nom."</td>";
                                echo "<td>".$salle->type."</td>";
                                echo "<td>".$salle->capacité."</td>";
                                echo "<td>".$salle->nbOrdinateurs."</td>";
                                echo "<td>";
                                if($salle->videoprojecteur == true){
                                    echo "Présent";
                                }else{
                                    echo "Non présent";
                                }
                                echo "</td> </tr>";
                        }
                        echo"</table>";
                        break;
                   

}
