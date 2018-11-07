<!DOCTYPE html>
<?php
    include ('secure.php');
    ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AREVE - Insérer article</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <form action='insert_article2.php' method="POST">
        Titre : <input type="text" name="titre" size="49" value=""><br>
        Auteur : <input type="text" name="auteur" size="30" value=""><br>
        Catégorie : <input type="text" name="categorie" size="49" value=""><br>
        Texte : <textarea name="texte" cols="37" rows="6"></textarea><br>
        Date de la manifestation : <input type="date" name="date_animation"><br>
        Lieu : <input type="text" name="lieu" size="49" value=""><br>
        <br>
        <a href="redaction.php"><input type="button" value="retour"></a>
        <input type="submit" value="valider">
    </form>
</body>
</html>