<?php
include ('secure.php');
include_once('config_connect.php');

//récupérer l'identifiant de l'article
$id_ar = (int) $_GET['id_article'];

//création requete SQL
$sql = "SELECT id_article, titre, texte, auteur, categorie, lieu, date_animation FROM news WHERE id_article = $id_ar";

//exécution requête
$sth = $pdo->query($sql);
$row = $sth->fetch(PDO::FETCH_ASSOC);

$titre = htmlspecialchars($row['titre'], ENT_QUOTES);
$texte = htmlspecialchars($row['texte'], ENT_QUOTES);
$categorie = htmlspecialchars($row['categorie'], ENT_QUOTES);
$auteur = htmlspecialchars($row['auteur'], ENT_QUOTES);
$lieu = htmlspecialchars($row['lieu'], ENT_QUOTES);
$date_animation = htmlspecialchars($row['date_animation'], ENT_QUOTES);


?>

<form action="modif_article2.php" method="POST">
    Titre : <input type='text' name='titre' size="42" value='<?php echo $titre; ?>'><br>
    Catégorie : <input type='text' name='categorie' size="20" value='<?php echo $categorie ?>'><br>
    Texte : <textarea name='texte' cols="37" rows='6'>
        <?php echo $texte; ?></textarea><br>
    <input type="hidden" name='id_article' value="<?php echo $id_ar; ?>">
    Auteur : <input type='text' name='auteur' size='49' value='<?php echo $auteur; ?>'><br>
    Lieu : <input type='text' name='lieu' size='49' value='<?php echo $lieu; ?>'><br>
    Date : <input type='date' name='date' value='<?php echo $date_animation; ?>'><br>
    <input type="submit" value="Valider">
</form>