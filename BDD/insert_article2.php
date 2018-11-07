<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AREVE - Inserer article</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    include_once ('config_connect.php');

    $sql='INSERT INTO news (titre, auteur, categorie, texte) VALUES (:titre, :auteur, :categorie, :texte)';

    $stmt = $pdo->prepare($sql);

    $titre = $_POST['titre'];
    $texte = $_POST['texte'];
    $auteur = $_POST['auteur'];
    $categorie = $_POST['categorie'];

    $valeurs = array(':titre'=>$titre,':texte'=>$texte, ':categorie'=>$categorie, ':auteur'=>$auteur);

    $stmt->execute($valeurs);

    //recuperation id
    $id=$pdo->lastInsertId();
    echo 'Article inséré avec succès<br><br>';
    echo "<a href='detail.php?id_article=$id'>Voir l'article</a>";
    ?>
    
</body>
</html>