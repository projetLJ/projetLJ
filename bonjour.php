<p>Bonjour 

	<?php
	
		
		if (isset($_GET['prenom']) AND isset($_GET['nom'])) // On a le nom et le prénom
		{
			echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
		}
		else // Il manque des paramètres, on avertit le visiteur
		{
			echo 'Il faut renseigner un nom et un prénom !';
		}

	?> 
   !

</p>