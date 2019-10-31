<html>
	<head>
		<meta charset='UTF-8'>
		<link rel='stylesheet' href='style.css'/>
	</head>
<?php
	if(isset($_POST['supprimer'])){
		
		echo
			"<body>
				<div id='global'>
					<h1> Il faut completer avec la BD : </h1>
					
					<form method='post' action='action.php'>
						<input type='submit' name='envoyer' value='Revenir à la page précédente' >
					</form>
				</div>
			</body>";
	}
	
?>
</html>
