<?php
$str = "Les choses que l'on possède finissent par nous posséder";
$longueur = strlen($str);

$chaineModifiee = $str[$longueur - 1]; 

for ($i = 0; $i < $longueur - 1; $i++) {
    $chaineModifiee .= $str[$i + 1];
}

echo $chaineModifiee;
?>