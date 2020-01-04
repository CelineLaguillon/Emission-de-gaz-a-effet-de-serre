<html>
	<?php
		require("fonction.php");
		session_start();
		if(!isset($_SESSION["id"])){
				header("Location: formulaire.php");
		}
		
		if(!$connexion=connexion()){
			die();		
		}
	?>

	<head>
		<?php
			haut_02("voirBC.php");
		?>
		<title>
			Modifier un bilan
		</title>
	</head>
	
	<body>
		<h1>Modifier le bilan</h1>
		<div id='formulaire'>
			<form method='post'>
				<label for='nom'>Nom du bilan</label>
				<?php
				$info=bilan_recuperation($connexion,$_GET['bilan']);
				echo "<input type='text' name='nom' id='nom'  value=$info[0] size='30' maxlength='10' required>";
				?>
				<br>
				<label for='periode'>Période</label>
				<?php
				echo "<input type='text' name='periode' id='periode'  value=$info[1] size='30' maxlength='11' required>";
				?>
				<input type='submit' id = 'enregistrer' name='enregistrer' value='Enregistrer' required>
			</form>
			<?php
				modification_bilan($connexion);
				mysqli_close($connexion);
			?>
		</div>
	</body>
</html>
