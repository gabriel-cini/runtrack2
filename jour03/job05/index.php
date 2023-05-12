<?php
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait.";

$dic = array(
    "consonnes" => 0,
    "voyelles" => 0
);

// Conversion de la chaîne en minuscules pour simplifier la vérification
$str = strtolower($str);

for ($i = 0; $i < strlen($str); $i++) {
    $caractere = $str[$i];
    
    if (preg_match('/[a-z]/', $caractere)) {
        if (in_array($caractere, array('a', 'e', 'i', 'o', 'u'))) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Résultats des occurrences de consonnes et de voyelles</title>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $dic["voyelles"]; ?></td>
            <td><?php echo $dic["consonnes"]; ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>
