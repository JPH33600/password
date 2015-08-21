<?php
	if (!empty($_POST['name'] and $_POST['password']) and $_POST["password"]=="kangourou")
		{
			echo 'Bonjour ' . $_POST['name'] . ' ! Bienvenue !';
		}
	else
		{
			echo "<p>Ah... Il semblerait que le nom n'a pas été renseigné ou que le mot de passe soit erroné... Veuillez recommencer.</p>";
			include "index.php";	
		}