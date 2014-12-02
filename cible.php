<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo htmlspecialchars($_POST['prenom']); ?> !</p>

<p>Si tu veux changer de prénom, <a href="form.php">clique ici</a> pour revenir à la page du formulaire.</p>

<form action="cible_envoi.php" method="post" enctype="multipart/form-data">
        <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
        </p>
</form>