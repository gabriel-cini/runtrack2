<!DOCTYPE html>
<html>
<head>
	<title>Tableau des variables</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
			border: 1px solid black;
		}
		th {
			background-color: gray;
			color: white;
		}
	</style>
</head>
<body>
	<?php
	// Déclaration des variables
	$booleanVar = true;
	$integerVar = 42;
	$stringVar = "Hello world!";
	$floatVar = 3.14159;

	// Génération du tableau HTML
	echo "<table>";
	echo "<thead><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thead>";
	echo "<tbody>";
	echo "<tr><td>booléen</td><td>booleanVar</td><td>$booleanVar</td></tr>";
	echo "<tr><td>entier</td><td>integerVar</td><td>$integerVar</td></tr>";
	echo "<tr><td>chaîne</td><td>stringVar</td><td>$stringVar</td></tr>";
	echo "<tr><td>flottant</td><td>floatVar</td><td>$floatVar</td></tr>";
	echo "</tbody></table>";
	?>
</body>
</html>
