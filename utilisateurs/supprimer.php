<?php

require_once('./utilisateurs/traitement.php');

function supprimer_livre($utilisateur, $livre_id) {
    /*
    Supprime le livre avec l'identifiant livre_id de la bibliothèque de l'utilisateur.
    */
    // Vérifier que l'utilisateur est connecté
    if (!$utilisateur->est_connecte()) {
        throw new Exception("L'utilisateur n'est pas connecté.");
    }
    
    // Trouver l'index du livre dans la bibliothèque de l'utilisateur
    $index_livre = null;
    foreach ($utilisateur->bibliotheque as $i => $livre) {
        if ($livre->id == $livre_id) {
            $index_livre = $i;
            break;
        }
    }
    
    if ($index_livre === null) {
        throw new Exception("Le livre n'a pas été trouvé dans la bibliothèque de l'utilisateur.");
    }
    
    // Supprimer le livre de la bibliothèque de l'utilisateur
    array_splice($utilisateur->bibliotheque, $index_livre, 1);
}