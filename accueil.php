<?php
	session_start();
	if(!isset($_SESSION["id"])){
			header("Location: formulaire.php");
	}
?>
<head>
		<meta charset='UTF-8'>
		<link rel='stylesheet' href='style.css'/>
	</head>

	<body>
		<div id='global'>
			<h1> Voici les différents choix : </h1>
			
			<a href="voirBC.php">Visualiser mes bilans</a>

			<form method='post' action='voirBC.php'>
			<input type='submit' name='voir' value='Visualiser mes bilans' >
			</form>
			
			<form method='post' action='creerBC.php'>			
			<input type='submit' name='creer' value='Créer un bilan' >
			</form>
			<a href="creerEtablissement.php">Ajouter un établissement</a>
			<form method='post' action='modifierBC.php'>
			<input type='submit' name='modifier' value='Modifier un bilan' >
			</form>

			<form method='post' action='supprimerBC.php'>
			<input type='submit' name='supprimer' value='Supprimer un bilan'>
			</form>

			<form method='post'>
			<input type='submit' name='deconnecter' value='Se deconnecter' required>
			</form>
			<?php
				if (isset($_POST['deconnecter'])){
		
				session_unset();
				session_destroy();
			
				header("Location: formulaire.php");
				
				}
			?>
		</div>
	</body>