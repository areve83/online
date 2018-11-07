<?php
include ('secure.php');
include_once('config_connect.php');

//récupérer les données
$titre = $_POST['titre'];
$texte = $_POST['texte'];
$auteur = $_POST['auteur'];
$categorie=$_POST['categorie'];
$id_article = (int) $_POST['id_article'];

//création requete SQL
$sql = "UPDATE news SET titre=:titre, texte=:texte, auteur=:auteur categorie=:categorie WHERE id_article=:id_article";

$stmt = $pdo->prepare($sql);

$valeurs = array(':titre'=>$titre,':texte'=>$texte,':auteur'=>$auteur, ':id_article'=>$id_article);

$stmt->execute($valeurs);
echo 'Article édité avec succès.<br><br>';
echo "<a href='detail.php?id_article=$id_article'>Voir article</a>";
?>