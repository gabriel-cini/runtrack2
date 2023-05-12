<!DOCTYPE html>
<html>
<head>
    <title>Affichage des nombres pairs et impairs</title>
</head>
<body>

<?php
$nombres = array(200, 204, 173, 98, 171, 404, 459);

foreach ($nombres as $nombre) {
    if ($nombre % 2 == 0) {
        echo $nombre . " est paire<br />";
    } else {
        echo $nombre . " est impaire<br />";
    }
}
?>

</body>
</html>
