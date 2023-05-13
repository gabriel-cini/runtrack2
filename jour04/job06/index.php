<!DOCTYPE html>
<html>
<head>
    <title>Vérification de nombre pair ou impair</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];

            if (is_numeric($nombre)) {
                if ($nombre % 2 === 0) {
                    echo "Nombre pair";
                } else {
                    echo "Nombre impair";
                }
            } else {
                echo "Veuillez entrer un nombre valide.";
            }
        }
    }
    ?>
    
    <form action="" method="GET">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" name="nombre" id="nombre"><br>

        <input type="submit" value="Vérifier">
    </form>
</body>
</html>
