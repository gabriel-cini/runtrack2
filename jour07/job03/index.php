<?php
session_start();

// Vérifie si la variable de session prenoms existe
if (!isset($_SESSION['prenoms'])) {
    // Si elle n'existe pas, initialise un tableau vide
    $_SESSION['prenoms'] = array();
}

// Vérifie si le formulaire a été soumis
if (isset($_POST['prenom'])) {
    // Ajoute le prénom saisi à la variable de session prenoms
    $prenom = $_POST['prenom'];
    $_SESSION['prenoms'][] = $prenom;
}

// Affiche l'ensemble des prénoms
echo "Liste des prénoms :";
echo "<ul>";
foreach ($_SESSION['prenoms'] as $prenom) {
    echo "<li>$prenom</li>";
}
echo "</ul>";

// Vérifie si le bouton "reset" a été soumis
if (isset($_POST['reset'])) {
    // Réinitialise la variable de session prenoms en un tableau vide
    $_SESSION['prenoms'] = array();
    echo "La liste a été réinitialisée.";
}

?>

<!-- Formulaire avec le champ de saisie de texte et le bouton submit -->
<form method="POST">
    <input type="text" name="prenom" placeholder="Entrez un prénom" required>
    <button type="submit">Ajouter</button>
</form>

<!-- Bouton "reset" -->
<form method="POST">
    <button type="submit" name="reset">Reset</button>
</form>
