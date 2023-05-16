<?php
session_start();

// Vérifie si la variable de session nbvisites existe
if (!isset($_SESSION['nbvisites'])) {
    // Si elle n'existe pas, initialise sa valeur à 0
    $_SESSION['nbvisites'] = 0;
}

// Incrémente la valeur de la variable de session nbvisites
$_SESSION['nbvisites']++;

// Affiche le contenu de la variable de session nbvisites
echo "Nombre de visites : " . $_SESSION['nbvisites'];

// Vérifie si le bouton "reset" a été soumis
if (isset($_POST['reset'])) {
    // Réinitialise la variable de session nbvisites à 0
    $_SESSION['nbvisites'] = 0;
    echo "<br>Le compteur a été réinitialisé.";
}

?>

<!-- Formulaire avec le bouton "reset" -->
<form method="POST">
    <button type="submit" name="reset">Reset</button>
</form>
