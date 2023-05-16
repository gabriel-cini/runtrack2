<?php
// Vérifie si le formulaire de connexion a été soumis
if (isset($_POST['connexion'])) {
    // Récupère le prénom saisi dans le formulaire
    $prenom = $_POST['prenom'];

    // Définit le cookie avec le prénom
    setcookie('prenom', $prenom, time() + (86400 * 30), '/'); // Expire dans 30 jours (86400 secondes par jour)

    // Redirige vers la même page pour éviter la soumission multiple du formulaire
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// Vérifie si l'utilisateur est déjà connecté (cookie existant)
if (isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
    echo "Bonjour $prenom !";
    echo "<br><br>";
    echo '<form method="POST">';
    echo '<button type="submit" name="deco">Déconnexion</button>';
    echo '</form>';

    // Vérifie si le bouton "Déconnexion" a été soumis
    if (isset($_POST['deco'])) {
        // Supprime le cookie en le rendant expiré
        setcookie('prenom', null, time() - 3600, '/');
        // Redirige vers la même page pour éviter la soumission multiple du formulaire
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
} else {
    // Affiche le formulaire de connexion
    echo '<form method="POST">';
    echo '<input type="text" name="prenom" placeholder="Entrez votre prénom" required>';
    echo '<button type="submit" name="connexion">Connexion</button>';
    echo '</form>';
}
?>
