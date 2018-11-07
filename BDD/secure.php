<?php
session_start();
//on verifie si l'utilisateur est identifié
if (!isset ($_SESSION['nom']))  {
    //pas de variable de session, utilisateur non authentifié
    header("Location : identification.php");
    exit();
    }
?>