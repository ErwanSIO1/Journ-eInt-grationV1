<?php
if (isset($_GET['action'])) {
    $action = filter_var($_GET['action'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
} else {
    $action = "accueil";
}


switch ($action){
  
    case 'modifierDeveloppeur'  :
      echo "modifier.";
                        echo"<form action=/index.php?controleur=modifierDeveloppeur&action=developpeurModifie method='POST'>".
                       "<div>".
                        "<input type ='hidden' name='id' id='id' value ='".$_GET['id']."'/>".
                        "</div>".
                              "<div>".
                              "<label for='prenom'>Prenom :</label>".
                              "<input name='prenom' id='prenom'/>".
                            "</div>".
                            "<div>".
                              "<label for='nom'>Nom :</label>".
                              "<input name='nom' id='nom'/>".
                            "</div>".
                            "<div>".
                              "<button>Modifier</button>".
                            "</div>".
                          "</form>";
                        break;
    case 'ajouterDeveloppeur'  :
      echo "ajouter.";
                        echo"<form action=/index.php?controleur=ajouterDeveloppeur&action=developpeurAjoute method='POST'>".
                            "<div>".
                              "<label for='prenom'>Prenom :</label>".
                              "<input name='prenom' id='prenom'/>".
                            "</div>".
                            "<div>".
                              "<label for='nom'>Nom :</label>".
                              "<input name='nom' id='nom'/>".
                            "</div>".
                            "<div>".
                              "<button>Ajouter</button>".
                            "</div>".
                          "</form>";
                        break;
}