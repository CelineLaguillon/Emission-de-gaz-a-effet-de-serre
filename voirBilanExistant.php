<html>
<body>
<table border='1' cellpadding='20' cellspacing='4'> 
<?php
$file="donnees2020.csv";        // le nom du fichier
$fp=fopen($file,"r");      // ouverture d'un pointeur de fichier en mode lecture
$res=fgetcsv($fp,1024,",");  //lecture du fichier
fclose($fp);              //fermeture du pointeur

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
echo "<td>",($res[0]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Fioul	</td>";
echo "<td align='center'>kWh</td>";
echo "<td align='center'>951kgCO2/kWh	</td>";
echo "<td>",($res[1]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td colspan='5' align='center'>Energie</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Electricite</td>";
echo "<td align='center'>kWh</td>";
echo "<td align='center'>0,023kgCO2/kWh</td>";
echo "<td>",($res[2]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Chauffage(gaz)</td>";
echo "<td align='center'>kWh</td>";
echo "<td align='center'>737kgCO2/kWh	</td>";
echo "<td>",($res[3]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td colspan='5' align='center'>Immobilisations</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Parking</td>";
echo "<td align='center'>m²</td>";
echo "<td align='center'>46kgCO2/m2</td>";
echo "<td>",($res[4]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Bureaux(métal)</td>";
echo "<td align='center'>m²</td>";
echo "<td align='center'>43 kgCO2/m2</td>";
echo "<td>",($res[5]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Locaux d'enseignement	</td>";
echo "<td align='center'>m²</td>";
echo "<td align='center'>120kgCO/m2	</td>";
echo "<td>",($res[6]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Garage(métal)</td>";
echo "<td align='center'>m²</td>";
echo "<td align='center'>60kgCO2/m2</td>";
echo "<td>",($res[7]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td colspan='5' align='center'>Matériel</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Imprimantes</td>";
echo "<td align='center'>nombre</td>";
echo "<td align='center'>30kgCO2/nombre</td>";
echo "<td>",($res[8]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Ordinateurs</td>";
echo "<td align='center'>nombre</td>";
echo "<td align='center'>350kgCO2/nombre</td>";
echo "<td>",($res[9]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>1&2</td>";
echo "<td align='center'>Photocopieuses</td>";
echo "<td align='center'>nombre</td>";
echo "<td align='center'>900kgCO2/nombre</td>";
echo "<td>",($res[10]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td colspan='5' align='center'>Déplacements</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Bus</td>";
echo "<td align='center'>km</td>";
echo "<td align='center'>0,021kgCO2/km</td>";
echo "<td>",($res[11]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Train(TGV/TER)</td>";
echo "<td align='center'>km</td>";
echo "<td align='center'>0,02 kgCO2/km</td>";
echo "<td>",($res[12]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Moto</td>";
echo "<td align='center'>km</td>";
echo "<td align='center'>0,034kgCO2/km</td>";
echo "<td>",($res[13]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Avion</td>";
echo "<td align='center'>km</td>";
echo "<td align='center'>0,329kgCO2/km</td>";
echo "<td>",($res[14]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Voiture</td>";
echo "<td align='center'>km</td>";
echo "<td align='center'>0,253kgCO2/km</td>";
echo "<td>",($res[15]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td colspan='5' align='center'>Déchets</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Papiers</td>";
echo "<td align='center'>tonnes/an</td>";
echo "<td align='center'>61kgCO2/tonne</td>";
echo "<td>",($res[16]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Carton</td>";
echo "<td align='center'>tonnes/an</td>";
echo "<td align='center'>42kgCO2/tonne</td>";
echo "<td>",($res[17]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Plastiques</td>";
echo "<td align='center'>tonnes/an</td>";
echo "<td align='center'>156kgCO2/tonne</td>";
echo "<td>",($res[18]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Déchets alimentaires</td>";
echo "<td align='center'>tonnes/an</td>";
echo "<td align='center'>96kgCO2/tonne</td>";
echo "<td>",($res[19]),"</td>";
echo "</tr>";

echo "<tr>"	;
echo "<td align='center'>3</td>";
echo "<td align='center'>Non combustibles</td>";
echo "<td align='center'>tonnes/an</td>";
echo "<td align='center'>4kgCO2/tonne</td>";
echo "<td>",($res[20]),"</td>";
echo "</tr>";


?>
</table>
</body>
</html>
