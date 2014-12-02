<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
    </head>
 
    <body>
 
    <?php include("entete.php"); ?>
    
    <?php include("menu.php"); ?>
    
    <!-- Le corps -->
    
    <div id="corps">
        <h1>Mon super site</h1>
        
        <p>
            Bienvenue sur mon super site !<br />
            Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
        </p>
    </div>
	
	
	<?php
	
		$age = 17;
		echo 'Le visiteur a ' . $age . ' ans<br />';
		
		if ($age <= 12) // SI l'âge est inférieur ou égal à 12
		{
			echo "Salut gamin ! Bienvenue sur mon site !<br />";
			$autorisation_entrer = "Oui";
		}
		else // SINON
		{
			echo "Ceci est un site pour enfants, vous êtes trop vieux pour pouvoir  entrer. Au revoir !<br />";
			$autorisation_entrer = "Non";
		}
		 
		echo "Avez-vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer</br></br>";
	?>	
		
		<a href='form.php?nom=Dupont&amp;prenom=Jean'>Entrez !</a></br></br>
	
	<?php

		
		function dateAuj() {
				
			// Enregistrons les informations de date dans des variables

			$jour = date('d');
			$mois = date('m');
			$annee = date('Y');

			$heure = date('H');
			$minute = date('i');
			return 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . ' et il est ' . $heure. ' h ' . $minute. '</br>';
		}

		// Maintenant on peut afficher ce qu'on a recueilli
		echo dateAuj();
		
		
		// Ci-dessous, la fonction qui calcule le volume du cône
		function VolumeCone($rayon, $hauteur)
		{
		   $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3); // calcul du volume
		   return $volume; // indique la valeur à renvoyer, ici le volume
		}

		echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . VolumeCone(3, 1). '</br></br>';

		/*
		 Tableau associatif (2 façon de créer)
		*/
		$coordonnees['prenom'] = 'François';
		$coordonnees['nom'] = 'Dupont';
		$coordonnees['adresse'] = '3 Rue du Paradis';
		$coordonnees['ville'] = 'Marseil';
		
		/*
		OU
		$coordonnees = array (
			'prenom' => 'François',
			'nom' => 'Dupont',
			'adresse' => '3 Rue du Paradis',
			'ville' => 'Marseille');
		*/
		
		echo $coordonnees['ville'];
		echo '</br>';
		foreach($coordonnees as $element)
		{
			echo $element . '<br />'; //affiche chaque élément
		}
		foreach($coordonnees as $cle => $element)
		{
			echo '[' . $cle . '] vaut ' . $element . '<br />';
		}
		
		/*
		 Tableau numéroté (3 façons de créer)
		*/
		$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
		$prenoms[5] = 'Arthur';
		$prenoms[] = 'Laurent'; 
		
		echo '<pre>';
		print_r($prenoms); //affichage rapide de tous
		echo '</pre>';

		// Puis on fait une boucle pour tout afficher :
		for ($numero = 0; $numero < 7; $numero++)
		{
			echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
		}
		
		
	?>
    
    <!-- Le pied de page -->
    
    <?php include("footer.php"); ?>
    
    </body>
</html>