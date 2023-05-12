<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$longueur = strlen($str);

$chaineModifiee = $str[$longueur - 1]; // Dernier caractère de la chaîne modifiée est le dernier caractère de la chaîne d'origine

for ($i = 0; $i < $longueur - 1; $i++) {
    $chaineModifiee .= $str[$i];
}

echo $chaineModifiee;
?>
