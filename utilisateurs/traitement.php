<?php
if(!isset($_GET['page'])){
    $_GET['page'] = 'acceuil';
}  
include_once('./index.php');
switch($_GET['page']){
    case ('acceuil'):
        break;
    case ('ajout'):
        include_once('./utilisateurs/ajouter.php');
        break;
    case ('supp'):
        include_once('./utilisateurs/supprimer.php');
        break;
    case ('inscr'):
        include_once('./utilisateurs/inscription.php');
        break;
    case ('connex') :
        include_once('./utilisateurs/connexion.php');
    case ('deconn'):
        include_once('./utilisateurs/logout.php');
        break;
    case ('modif'):
        include_once('./utilisateurs/modifier.php');
        break;
    case ('class'):
        include_once('./utilisateurs/classe.php');
        break;
    case('traitement'):
        include_once('./utilisateurs/traitement.php');
        break;
    default:
        break;

}
?>