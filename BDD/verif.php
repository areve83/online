<?php

include_once 'config_connect.php';

$req=$pdo->prepare('SELECT id, pass, nom FROM inscrits WHERE nom = :nom');
$req->execute(array(
    'nom'=>$nom));
$resultat = $req->fetch();
print_r $resultat;

$isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

if (!$resultat)
{
    echo "Mauvais identifiant ou mot de passe";
}
else
{
    if($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['nom'] = $resultat['nom'];
        echo "Vous êtes connecté.";
    }
    else {
        echo "Mauvais identifiant ou mot de passe.";
    }
}
?>
