<html>
	<head>
		<meta charset='UTF-8'>
	</head>

	<?php
		
		function connexion(){
			require("parametres.php");
			if($connexion=mysqli_connect($serveur,$login,$mdp)){
				mysqli_select_db($connexion,$bd)
				or die("Impossible d'accèder à la base de données");
				return $connexion;
			}
		}
		
		function session_check(){
			session_start();
			if(!isset($_SESSION["id"])){
				header("Location: index.php");
			}
		}

		function sanitizeString($var) {
                	$var=mysqli_real_escape_string($var);
                        $var = stripslashes($var); //enlève les barres obliques indésirables
                	$var = strip_tags($var);   // enlève toute balise html
                	return $var;
        	}

		
		
		
		function navigation(){
			echo "
				<nav> 
					<ul id = 'menu1'>					
						<li>
							<a href = 'http://www.iut-velizy-rambouillet.uvsq.fr/' title = \"Lien vers le site de l'IUT de Vélizy\">
								<img class = 'logo_IUT' src = 'Images/Logo.png' alt = \"Logo de l'IUT de Vélizy\">
							</a>
						</li>
					</ul>
						
					<ul id = 'menu2'>
						<li class = 'droite'>
							<a href = 'voirBC.php' class = 'texte'>
								Mes bilans
							</a>
						</li>

						<li class = 'droite'>
							<a href = 'gestionDuCompte.php' class = 'texte'>
								Gestion du compte
							</a>
						</li>
						
						
						<li class = 'droite'>
							<a class = 'deconnexion' onclick = \"return confirm('Souhaitez-vous quitter votre session ?');\" href = 'deconnexion.php'>
								<img class = 'icone_deconnexion' src = 'Images/deconnexion.png' alt = 'Déconnexion' title = 'Déconnexion'>
							</a>
						</li>
					</ul>
				</nav>";
		}
	?>
</html>
