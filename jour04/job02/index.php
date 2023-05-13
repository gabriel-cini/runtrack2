<!DOCTYPE html>
<html>
<head>
    <title>Tableau des arguments GET</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // Vérifier si des données ont été soumises
        if (!empty($_GET)) {
            echo '<table>';
            echo '<tr><th>Argument</th><th>Valeur</th></tr>';

            foreach ($_GET as $argument => $valeur) {
                echo '<tr>';
                echo '<td>' . $argument . '</td>';
                echo '<td>' . $valeur . '</td>';
                echo '</tr>';
            }

            echo '</table>';
        }
    }
    ?>
    
    <form action="" method="GET">
        <label for="Prenom">Prenom :</label>
        <input type="text" name="Prenom" id="Prenom"><br>

        <label for="Nom">Nom :</label>
        <input type="text" name="Nom" id="Nom"><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

