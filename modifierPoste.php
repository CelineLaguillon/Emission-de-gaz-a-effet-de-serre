<html>
	<?php
		require("fonction.php");
		session_check();
		if(!$connexion=connexion()){
			die();	
				
		}
		
		haut_02("voirPoste.php");
	?>
		<body>
			<div id='global'>
				<h1>Modifier le poste</h1>
				<form method='post'>
					<label for='nom'>Nom du poste</label>
					<?php
					$info=poste_recuperation($connexion,$_GET['bilan']);
					echo "<input type='text' name='nom' id='nom'  value=$info[0] size='30' maxlength='10' required>";
					?>
					<br>
					<label for='Periode'>Période</label>
					<?php
					echo "<input type='text' name='Periode' id='Periode'  value=$info[1] size='30' maxlength='11' required>";
					?>
					<input type='submit' name='enregistrer' value='Enregistrer ce poste' required>
				</form>
				<?php
					modification_poste($connexion);
					mysqli_close($connexion);
				?>
			</div>
		</body>
</html>
