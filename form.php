<?php
// Récupère les données du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Enregistre les informations dans un fichier
    $file = fopen("user_data.txt", "a"); // Ouvre un fichier pour écrire
    fwrite($file, "Nom d'utilisateur: $username\n");
    fwrite($file, "Mot de passe: $password\n\n");
    fclose($file);
}
?>




