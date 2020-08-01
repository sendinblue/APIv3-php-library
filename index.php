<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Parrainage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
	
	<?php 
	/* On n'affiche le formulaire que si une adresse email pour le parrain a été renseignée dans l'URL */
	if( isset($_GET['parrain']) ){ 
	?>

		<!-- Les données du formulaire seront envoyées à la page backend.php via une requète POST -->
		<form action="backend.php" method="POST">
			<input name="invite" type="text" placeholder="Email de votre ami" />
			<!-- L'adresse email du parrain récupérée dans l'URL est soumise au formulaire via un bouton caché -->
			<input name="parrain" value="<?php echo $_GET['parrain']; ?>" type="hidden" />
			<input type="submit" value="Inviter">
		</form>

	<?php } else { ?>
	
	Aucune adresse email n'a été soumise pour le parrain.
	
	<?php } ?>
</body>
</html>
