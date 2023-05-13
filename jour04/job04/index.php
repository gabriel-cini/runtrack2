<!DOCTYPE html>
<html>
<head>
    <title>Formulaire POST</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<table>';
    echo '<tr><th>Argument</th><th>Valeur</th></tr>';

    foreach ($_POST as $argument => $valeur) {
        echo '<tr>';
        echo '<td>' . $argument . '</td>';
        echo '<td>' . $valeur . '</td>';
        echo '</tr>';
    }

    echo '</table>';
}
?>

    <form action="" method="POST">
        <label for="Prenom">Prenom :</label>
        <input type="text" name="champ1" id="champ1"><br>

        <label for="Nom">Nom :</label>
        <input type="text" name="champ2" id="champ2"><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
