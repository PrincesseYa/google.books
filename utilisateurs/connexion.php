

<?php

session_start();

require_once('./utilisateurs/traitement.php');


// Configuration de la base de données
$host = "localhost";
$user = "root";
$password = "";
$database = "bibliotheque";

// Connexion à la base de données
$conn = mysqli_connect($host, $user, $password, $database);

// Vérification des erreurs de connexion
if (!$conn) {
    die("Connexion à la base de données impossible: " . mysqli_connect_error());
}

// Traitement du formulaire de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
	$hashed_password = $_POST["password"];

    // Vérification des informations de connexion dans la base de données
    $query = "SELECT * FROM bibliotheque WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    // Vérification du nombre de lignes retournées
    if (mysqli_num_rows($result) == 1) {

        // Connexion réussie, rediriger l'utilisateur vers la page d'accueil
        header("Location: /index.php");
    } else {

        // Identifiants incorrects, afficher un message d'erreur
        echo "Email ou mot de passe incorrect.";
    }
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>




