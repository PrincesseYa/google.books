$(document).ready(function() {
    const bookUrl = "https://www.googleapis.com/books/v1/volumes?q=subject:geography&langRestrict=fr";
    const outputList = document.getElementById("output-list");
    let item, title, author, publisher, bookLink, bookImg;
    let searchData; 
});


    // listener pour bouton de recherche

$("search").click.function;
    outputList.innerHTML = ""
    searchData = $("search-box").val();


    // gestion du champs de saisie de recherche

    if(searchData === "" || searchData === null) {
        displayError();
    }
    else {
        $.ajax({
            url: bookUrl + searchData, // Ajout de l'URL de recherche
            dataType: 'json',
            success: function(response) { // Correction du nom de la variable
                console.log(response);
                if(response.totalItems === 0) { // Correction du nom de la propriété
                    alert("Pas de résultat ... Essayez à nouveau");
                }
                else {
                    $("h1").animate({'margin-top': '10px'}); // Correction de la propriété CSS
                    $(".book-list").css('visibility', 'visible'); // Correction de la propriété CSS
                    displayResults(response);
                }
            },
            error: function() {
                alert("Oups ... Quelque chose s'est mal passé :(");
            }
        });
    }
    
    $("#search-box").val("")




    
<?php

// Démarrer une session
session_start();

require_once('./utilisateurs/traitement.php');

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Récupérer les données soumises
	$email = htmlspecialchars($_POST["email"]);
	$password = htmlspecialchars($_POST["password"]);

	// Connexion à la base de données
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bibliotheque";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connexion échouée: " . $conn->connect_error);
	} 
	
	// Vérifier si l'utilisateur existe dans la base de données
	$sql = "SELECT * FROM utilisateurs WHERE email='$email' AND password='$password'";
	$result = $conn->query($sql);

	if ($result->num_rows == 1) {

		// Récupérer les informations de l'utilisateur
		$row = $result->fetch_assoc();
		$id_utilisateur = $row["id"];
		$nom_utilisateur = $row["nom"];
        $hashed_password = $row["password"];

   
		// Stocker les informations de l'utilisateur dans la session
		$_SESSION["id_utilisateur"] = $id_utilisateur;
		$_SESSION["nom_utilisateur"] = $nom_utilisateur;

		echo "Connexion réussie.";
	} else {
		echo "Adresse e-mail ou mot de passe incorrect.";
	}

	$conn->close();


}*/


    



  