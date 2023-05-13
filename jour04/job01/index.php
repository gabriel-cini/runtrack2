
<!DOCTYPE html>
<html>
<head>
    <title>Formulaire GET</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $count = count($_GET);
    echo "Le nombre d'arguments GET envoyé est : " . $count;
}
?>
    <form action="traitement.php" method="GET">
        <label for="Prenom">Prenom :</label>
        <input type="text" name="Prenom" id="Prenom"><br>

        <label for="Nom">Nom :</label>
        <input type="text" name="Nom" id="Nom"><br>
        
        <input type="submit" value="Envoyer">

        
    </form>
</body>
</html>
