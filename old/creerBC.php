<html>
<?php
	if(isset($_POST['creer'])){
		
		echo "
		<head>
			<meta charset='UTF-8'>
			<link rel='stylesheet' href='style.css'/>
		</head>

		<body>
			<div id='global'>
			<h1> Compléter ce court formulaire : </h1>
			
			<label for='nom'>Nom : </label>
			<input type='text' name='nom' id='nom'  placeholder='Ex : Electricité' size='30' maxlength='10' required>
			
			<label for='nom'>Facteur : </label>
			<input type='text' name='facteur' id='facteur'  placeholder='Ex : 1.2' size='30' maxlength='10' required>
			
			<label for='nom'>Consommation : </label>
			<input type='text' name='consommation' id='consommation'  placeholder='Ex : 1100kW' size='30' maxlength='10' required>
			
			<input type='submit' name='enregistrer' value='Enregistrer ce Bilan' required>

			
			<form method='post' action='action.php'>
			<input type='submit' name='envoyer' value='Revenir à la page précédente' >
			</form>
			
			</div>
		</body>";
	}
	
?>
</html>
