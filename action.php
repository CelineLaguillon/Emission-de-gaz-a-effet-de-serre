<?php
	require("parametres.php");
	function sanitizeString($var) {
		if(get_magic_quotes_gpc())   //si activée magic ajoute des apostrophes avec des barres obliques
			$var = stripslashes($var); //enlève les barres obliques indésirables     
		$var = htmlentities($var);   // enlève toute balise html
		return $var;
	}
	if(isset($_POST["login"])){
		if($connexion=mysqli_connect($serveur,$login,$mdp)){
			mysqli_select_db($connexion,$bd)
			or die("<h4>Il est impossible d'accéder à la base de données.</h4>");
			$tables="utilisateur";
			$login=$_POST["login"];
			$mdp=$_POST["mdp"];
			$requete="SELECT login FROM $tables where login='$login'";
			$resultat1=mysqli_query($connexion,$requete);
			$requete="SELECT login,mdp FROM $tables where login='$login' and mdp='$mdp'";
			$resultat2=mysqli_query($connexion,$requete);

			if(mysqli_num_rows($resultat1)>0){
				$verification=mysqli_fetch_row($resultat2);
				if($mdp==$verification[1]){
					session_start();
					$_SESSION["id"]=$_POST['login'];
					mysqli_close($connexion);
					header("Location: voirBC.php");
				}
				else{
					header("Location: index.php?id=1");
				}
			}
			else{
				header("Location: index.php?id=2");
			}		
		}
		else{
			header("Location: index.php?id=3");
		}
	}
	else{
			header("Location: index.php?id=4");
	}	
?>