<?php
$str = "I'm sorry Dave I'm afraid I can't do that.";

$voyelles = array('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');

$resultat = "";
for ($i = 0; $i < strlen($str); $i++) {
    if (in_array($str[$i], $voyelles)) {
        $resultat .= $str[$i];
    }
}

echo $resultat;
?>
