<?php
require_once('./utilisateurs/traitement.php');

class Utilisateur {
    private $nom_utilisateur;
    private $mot_de_passe;
    
    public function Inscription($nom_utilisateur, $mot_de_passe) {
      // Ajoute un nouvel utilisateur à la base de données de l'API
    }
    
    public function Connexion($nom_utilisateur, $mot_de_passe) {
      // Connectez l'utilisateur à l' API
    }
  }
  
  class Livre {
    private $titre;
    private $auteur;
    private $description;
    
    public function RechercheLivre($titre) {
      // Rechercher un livre dans la base de données de l' API
    }
    
    public function AjouterLivre($titre, $auteur, $description) {
      // Ajouter un nouveau livre à la base de données de votre API
    }
  }
  