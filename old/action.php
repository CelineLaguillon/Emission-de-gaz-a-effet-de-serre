<html>
	<head>
		<meta charset='UTF-8'>
		<link rel='stylesheet' href='style.css'/>
	</head>
<?php
	if(isset($_POST['envoyer'])){
	session_start();
	echo
		" <body>
			<div id='global'>
				<h1> Que voulez-vous faire ? </h1>
				
				<form method='post' action='voirBC.php'>
					<input type='submit' name='voir' value='Visualiser mes bilans' >
				</form>
				
				<form method='post' action='creerBC.php'>			
					<input type='submit' name='creer' value='Créer un bilan' >
				</form>
			
				<form method='post' action='modifierBC.php'>
					<input type='submit' name='modifier' value='Modifier un bilan' >
				</form>

				<form method='post' action='supprimerBC.php'>
					<input type='submit' name='supprimer' value='Supprimer un bilan'>
				</form>

				<form method='post' action='deconnexion.php'>
					<input type='submit' name='deconnecter' value='Se deconnecter' required>
				</form>
			</div>
		</body>";
	}
?>
</html>