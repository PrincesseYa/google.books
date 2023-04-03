<?php

require_once('./utilisateurs/traitement.php');

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Récupérer les données soumises
	$nom = htmlspecialchars($_POST["nom"]);
	$email = htmlspecialchars($_POST["email"]);
	$password = htmlspecialchars($_POST["password"]);

    // Hasher le mot de passe avec la fonction password_hash()
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

	// Connexion à la base de données
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bibliotheque";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connexion échouée: " . $conn->connect_error);
	} 
	
	// Vérifier si l'adresse e-mail existe déjà dans la base de données
	$sql = "SELECT * FROM utilisateurs WHERE email='$email'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "Cette adresse e-mail est deja enregistrée.";
	} else {
		
		// Insérer les données dans la base de données
		$sql = "INSERT INTO utilisateurs (nom, email, password) VALUES ('$nom', '$email', '$password')";
		if ($conn->query($sql) === TRUE) {
			echo "Inscription réussie.";
		} else {
			echo "Erreur: " . $sql . "<br>" . $conn->error;
		}
	}

	$conn->close();
}
?>
