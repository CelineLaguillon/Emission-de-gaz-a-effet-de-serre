<?php
	require("fonction.php");
	session_start();
	if(!isset($_SESSION["id"])){
			header("Location: formulaire.php");
	}
?>

<html>
	<?php
		haut_02("voirBC.php");
	?>
	
	<body>
		<div id='global'>
			<h1>Nom du bilan sélectionné</h1>
			<h2>Catégorie 1</h2>
			<p>A compléter</p>
			<h2>Catégorie 2</h2>
			<p>A compléter</p>
			<h2>Catégorie 3</h2>
			<p>A compléter</p>
		</div>
	</body>
</html>
