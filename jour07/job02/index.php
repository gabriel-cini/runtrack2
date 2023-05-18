<?php
// Vérifie si le cookie nbvisites existe
if (isset($_COOKIE['nbvisites'])) {
    // Incrémente la valeur du cookie nbvisites
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    // Si le cookie n'existe pas, initialise sa valeur à 0
    $nbvisites = 0;
}

// Définit le cookie nbvisites avec la nouvelle valeur
setcookie('nbvisites', $nbvisites, time() + (86400 * 30), '/'); // Expire dans 30 jours (86400 secondes par jour)

// Affiche le contenu du cookie nbvisites
echo "Nombre de visites : " . $nbvisites;

// Vérifie si le bouton "reset" a été soumis
if (isset($_POST['reset'])) {
    // Supprime le cookie nbvisites en le rendant expiré
    setcookie('nbvisites', null, time() - 3600, '/');
    echo "<br>Le compteur a été réinitialisé.";
}

?>

<!-- Formulaire avec le bouton "reset" -->
<form method="POST">
    <button type="submit" name="reset">Reset</button>
</form>
