<html>
        <?php
                require("fonction.php");

                session_check();
                if(!$connexion=connexion()){
                        die();

                }
        ?>

        <head>

                <meta charset='UTF-8'>
                <link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="css/bilan_poste.css">
                <link rel="stylesheet" href="css/tableau.css">

                <title>
                        Les postes
                </title>
        </head>

        <header>
                <?php
                        navigation();
                ?>
        </header>

<body>
<table border='1' cellpadding='20' cellspacing='4'> 
<?php
echo "<form method='post' action='actionPoste.php'>";
echo "<tr>"	;
echo "<td align='center'>Catégorie</td>";
echo "<td align='center'>Poste</td>";
echo "<td align='center'>Unité</td>";
echo "<td align='center'>Facteur d'émission</td>";
echo "<td align='center'>Valeur</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td colspan='5' align='center'>Sources fixes</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Gaz naturel</td>";
echo "<td align='center'>kWh</td>";
echo "<td align='center'>737kgCO2/kWh</td>";
echo "<td><input type='number' value='0' name ='gaz'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Fioul	</td>";
echo "<td align='center'>kWh</td>";
echo "<td align='center'>951kgCO2/kWh	</td>";
echo "<td><input type='number' value='0' name ='fioul'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td colspan='5' align='center'>Energie</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Electricite</td>";
echo "<td align='center'>kWh</td>";
echo "<td align='center'>0,023kgCO2/kWh</td>";
echo "<td><input type='number' value='0' name ='electricite'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Chauffage(gaz)</td>";
echo "<td align='center'>kWh</td>";
echo "<td align='center'>737kgCO2/kWh	</td>";
echo "<td><input type='number' value='0' name ='chauffage'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td colspan='5' align='center'>Immobilisations</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Parking</td>";
echo "<td align='center'>m²</td>";
echo "<td align='center'>46kgCO2/m2</td>";
echo "<td><input type='number' value='0' name ='parking'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Bureaux(métal)</td>";
echo "<td align='center'>m²</td>";
echo "<td align='center'>43 kgCO2/m2</td>";
echo "<td><input type='number' value='0' name='bureaux'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Locaux d'enseignement	</td>";
echo "<td align='center'>m²</td>";
echo "<td align='center'>120kgCO/m2	</td>";
echo "<td><input type='number' value='0' name='locaux'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Garage(métal)</td>";
echo "<td align='center'>m²</td>";
echo "<td align='center'>60kgCO2/m2</td>";
echo "<td><input type='number' value='0' name='garage'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td colspan='5' align='center'>Matériel</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Imprimantes</td>";
echo "<td align='center'>nombre</td>";
echo "<td align='center'>30kgCO2/nombre</td>";
echo "<td><input type='number' value='0' name='imprimantes'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Ordinateurs</td>";
echo "<td align='center'>nombre</td>";
echo "<td align='center'>350kgCO2/nombre</td>";
echo "<td><input type='number' value='0' name='ordinateurs'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Photocopieuses</td>";
echo "<td align='center'>nombre</td>";
echo "<td align='center'>900kgCO2/nombre</td>";
echo "<td><input type='number' value='0' name='photocopieuses'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td colspan='5' align='center'>Déplacements</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Bus</td>";
echo "<td align='center'>km</td>";
echo "<td align='center'>0,021kgCO2/km</td>";
echo "<td><input type='number' value='0' name='bus'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Train(TGV/TER)</td>";
echo "<td align='center'>km</td>";
echo "<td align='center'>0,02 kgCO2/km</td>";
echo "<td><input type='number' value='0' name='train'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Moto</td>";
echo "<td align='center'>km</td>";
echo "<td align='center'>0,034kgCO2/km</td>";
echo "<td><input type='number' value='0' name='moto'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Avion</td>";
echo "<td align='center'>km</td>";
echo "<td align='center'>0,329kgCO2/km</td>";
echo "<td><input type='number' value='0' name='avion'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Voiture</td>";
echo "<td align='center'>km</td>";
echo "<td align='center'>0,253kgCO2/km</td>";
echo "<td><input type='number' value='0' name='voiture'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td colspan='5' align='center'>Déchets</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Papiers</td>";
echo "<td align='center'>tonnes/an</td>";
echo "<td align='center'>61kgCO2/tonne</td>";
echo "<td><input type='number' value='0' name='papier'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Carton</td>";
echo "<td align='center'>tonnes/an</td>";
echo "<td align='center'>42kgCO2/tonne</td>";
echo "<td><input type='number' value='0' name='carton'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Plastiques</td>";
echo "<td align='center'>tonnes/an</td>";
echo "<td align='center'>156kgCO2/tonne</td>";
echo "<td><input type='number' value='0' name='plastique'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Déchets alimentaires</td>";
echo "<td align='center'>tonnes/an</td>";
echo "<td align='center'>96kgCO2/tonne</td>";
echo "<td><input type='number' value='0' name='dechets'></td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Non combustibles</td>";
echo "<td align='center'>tonnes/an</td>";
echo "<td align='center'>4kgCO2/tonne</td>";
echo "<td><input type='number' value='0' name='combu'></td>";
echo "</tr>";


?>
</table>

	<button type='submit' value='valider'>Valider le bilan</button>
	<button type='reset' value='annuler'>Reset</button>
</form>
</body>
</html>
