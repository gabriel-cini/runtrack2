<!DOCTYPE html>
<html>
<head>
    <title>Formulaire POST</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $count = count($_POST);
    echo "Le nombre d'arguments POST envoyé est : " . $count;
}
?>

    <form action="" method="POST">
        <label for="Prenom">Prenom :</label>
        <input type="text" name="Prenom" id="Prenom"><br>

        <label for="Nom">Nom :</label>
        <input type="text" name="Nom" id="Nom"><br>

        <input type="submit" value="Envoyer">   
    </form>
</body>
</html>
