<?php

require_once('./utilisateurs/traitement.php');

session_destroy();
header('Location: .//inscription.php');

exit; 



