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
	
	haut_02("voirBC.php");
?>
		<body>
			<div id='global'>
				<h1>Modifier le bilan</h1>
				<form method='post'>
					<label for='nom'>Nom du bilan</label>
					<?php
					$info=bilan_recuperation($connexion,$_GET['bilan']);
					echo "<input type='text' name='nom' id='nom'  value=$info[0] size='30' maxlength='10' required>";
					?>
					<br>
					<label for='Periode'>Période</label>
					<?php
					echo "<input type='text' name='Periode' id='Periode'  value=$info[1] size='30' maxlength='11' required>";
					?>
					<input type='submit' name='enregistrer' value='Enregistrer' required>
				</form>
				<?php
					modification_bilan($connexion);
					mysqli_close($connexion);
				?>
			</div>
		</body>
</html>
