<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  
  <title>PICNIC - Journée d'intégration</title>
  <link rel="stylesheet" href="styleflexbox.css">
  <link rel="stylesheet" href="integrationPolicesExotiques.css">
	
</head>
<body>
	<header>
 		<img class="picnic_logo" src="images/SJP_Picnic_logo.jpg" alt="SJP logo picnic"/>
		
 		<h1 class="titre">Application Journée d'intégration</h1>
	</header>
	
	
	<section>
		<nav> 
			<ul>
                        <li> <a href="index.php"> Accueil </a></li>
			<li> <a href="index.php?controleur=gestionAteliers&action=ateliers"> Ateliers </a></li>
                        <li> <a href="index.php?controleur=gestionSalles&action=salles"> Salles </a></li>
                        <li> <a href="index.php?controleur=gestionCompetences&action=competences"> Compétences </a></li>
			<li> <a href="index.php?controleur=gestionDeveloppeurs&action=aPropos"> A propos </a></li>
			</ul>
		</nav>
		<div id="contenu">
		<?php
			// si aucune information n'est présente dans l'url, le controleur par défaut sera "accueil"
			if (isset($_GET['controleur']))
				$controleur=filter_var($_GET['controleur'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
			else
				$controleur= "general";
                    
            switch ($controleur){
                    case 'general'          : include("controleurs/gestionGlobale.php"); break;
                    case 'gestionAteliers'  : include("controleurs/gestionAteliers.php"); break;
                    case 'gestionDeveloppeurs'  : include("controleurs/gestionDeveloppeurs.php"); break;
                    case 'gestionSalles'  : include("controleurs/gestionSalles.php"); break;
                    case 'gestionCompetences'  : include("controleurs/gestionCompetences.php"); break;
                    case 'formulaire'  : include("vues/v_formulaire.php"); break;
                    case 'ajouterDeveloppeur'          : include("controleurs/gestionDeveloppeurs.php"); break;
                    case 'modifierDeveloppeur'          : include("controleurs/gestionDeveloppeurs.php"); break;
            }
              
                
       ?>
			
		</div>
	</section>
	<footer>
		<p id="banniere">
				Le BTS SIO du lycée Saint-John Perse
		</p>
		<div id="SJP_SIO_Presentation">
			<p>	Le BTS SIO(Services Informatiques aux Organisations) est un diplôme de technicien du domaine informatique. Selon l'option choisie, l'étudiant diplomé sera spécialisé en maintenance systèmes et réseaux (option SISR) ou bien en développement d'applications métiers (option SLAM).
			Les diplômés peuvent s'insérer dans la vie active, mais il leur est suggéré, dans la mesure du possible, de poursuivre leurs études : en licence LMD (dont licences informatique et parcours MIAGE, licence professionnelle, école d'ingénieur ou école spécialisée.
			</p>
			<img id="SJP_Logo" src="images/SJP_logo_long.jpg" alt="SJP formation BTS SIO" />
		</div>
	</footer>
</body>
</html>

