<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de connexion</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === 'John' && $password === 'Rambo') {
            echo "C'est pas ma guerre";
        } else {
            echo 'Votre pire cauchemar';
        }
    }
    ?>
    
    <form action="" method="POST">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" id="username"><br>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password"><br>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
