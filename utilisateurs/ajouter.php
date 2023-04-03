<?php


require_once('./utilisateurs/traitement.php');

function trouver_livre($livre_id) {
    // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', '');

    // Requête pour récupérer le livre correspondant à l'identifiant $livre_id
    $requete = $bdd->prepare('SELECT * FROM livres WHERE id = ?');
    $requete->execute([$livre_id]);

    // Récupération du livre sous forme d'objet
    $livre = $requete->fetch(PDO::FETCH_OBJ);

    // Retourne le livre ou null s'il n'existe pas
    return $livre ? $livre : null;
}


function ajouter_livre($utilisateur, $livre_id) {
    
    // Ajoute le livre avec l'identifiant livre_id à la bibliothèque de l'utilisateur.

    
    // Vérifier que l'utilisateur est connecté
    if (!$utilisateur->est_connecte()) {
        throw new Exception("L'utilisateur n'est pas connecté.");
    }
    
    // Vérifier que le livre existe dans la base de données
    $livre = trouver_livre($livre_id);
    if (!$livre) {
        throw new Exception("Le livre n'a pas été trouvé dans la base de données.");
    }
    
    // Ajouter le livre à la bibliothèque de l'utilisateur
    $utilisateur->bibliotheque[] = $livre;
}





