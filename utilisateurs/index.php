<?php session_start();
require_once('./utilisateurs/traitement.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Books API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <link rel="stylesheet" href="/index.css"> <script src="../index2.js"></script> <link rel="stylesheet" href="/index.html">
    
   
</head>




<header>
    <nav class="sign-in log-in">
        <a href="/pages/formulaire.html"> Inscription </a>
        <br>
        <a href="/pages/connexion.html"> Connexion </a>

        <div class="nav-item m-2">
            <a class="nav-link active" aria-current="page" href="./utilisateurs/inscription.php">Déconnexion</a>
          </div>
    </nav>

</header>



<body>
    <div class="container">
        <div id="title" class="text-center mt-5">Goole Books API</div>
        <div class="row">
            <div id="input" class="input-group mx-auto col-lg-6 col-md-8 col-sm-12">
                <input id="search-box" type="text" class="form-control" placeholder="Rechercher un livre!..">
                <button id="search" class="btn btn-primary" onclick=""></button>
            </div>
        </div>
    </div>
    <div class="book-list">
        <h2 class="text-text">Recherche du résultat</h2>
        <div id="list-output">
            <div class="row">

            </div>
        </div>
    </div>



    
     
</body>



</html>





