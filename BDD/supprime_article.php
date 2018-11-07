<?php
include_once ('config_connect.php');
include_once ('secure.php');

$sql = "DELETE FROM news WHERE id_article=:article";

$stmt = $pdo->prepare($sql);

$id_article = $_GET['id_article'];

$stmt->execute(array(':article'=>$id_article));

echo "Article supprimé"."<br><br>";
echo '<a href="redaction.php"><input type="button" value="Retour"></a>';
?>