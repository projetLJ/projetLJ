<p>
	<?php
	
		
		if (isset($_GET['prenom']) AND isset($_GET['nom'])) // On a le nom et le prénom
		{
			echo 'Bonjour ' . htmlspecialchars($_GET['prenom']) . ' ' . htmlspecialchars($_GET['nom']) . ' !';
		}
		else // Il manque des paramètres, on avertit le visiteur
		{
			echo 'Il faut renseigner un nom et un prénom !';
		}
		
		

	?> 

	
	<form action="cible.php" method="post">
	<p>
		Prenom : <input type="text" name="prenom" />
		<input type="submit" value="Valider" />
	</p>
	</form>
	
	<?php
	
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}
		
		$nom = 'Battlefield 1942';
		$possesseur = 'Patrick';
		$console = 'PC';
		$prix = 45;
		$nbre_joueurs_max = 50;
		$commentaires = '2nde guerre mondiale';
		
		$req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
		$req->execute(array(
			'nom' => $nom,
			'possesseur' => $possesseur,
			'console' => $console,
			'prix' => $prix,
			'nbre_joueurs_max' => $nbre_joueurs_max,
			'commentaires' => $commentaires
			));

		echo 'Le jeu a bien été ajouté !';
		
		$nvprix = 10;
		$nv_nb_joueurs = 16;
		$nom_jeu = 'Battlefield 1942';
		
		$req = $bdd->prepare('UPDATE jeux_video SET prix = :nvprix, nbre_joueurs_max = :nv_nb_joueurs WHERE nom = :nom_jeu');
		$req->execute(array(
			'nvprix' => $nvprix,
			'nv_nb_joueurs' => $nv_nb_joueurs,
			'nom_jeu' => $nom_jeu
			));
		
		$reponse = $bdd->query('SELECT * FROM jeux_video group by nom');
		
		// On affiche chaque entrée une à une
		while ($donnees = $reponse->fetch())
		{ 
		?>
			<p>
			<strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
			Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend à <?php echo $donnees['prix']; ?> euros !<br />
			Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
			<?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?> : <em><?php echo $donnees['commentaires']; ?></em>
		   </p>
		<?php
		}

		$reponse->closeCursor(); // Termine le traitement de la requête

	?>

</p>