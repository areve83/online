<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Actualité</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <?php
    include_once 'config_connect.php';

    //récupérer l'identifiant passé en paramètre
    $id_article=(int) $_GET['id_article'];

    //création de requête
    $sql="SELECT id_article, titre, auteur, categorie, date_publication, texte, lieu, date_animation FROM news WHERE (id_article=$id_article)";

    //exécution de la requête
    $sth=$pdo->query($sql);
    $row=$sth->fetch(PDO::FETCH_ASSOC);

    $titre=$row['titre'];
    $auteur=$row['auteur'];
    $categorie=$row['categorie'];
    $date_pub=$row['date_publication'];
    $id_article=$row['id_article'];
    $texte=$row['texte'];
    $lieu=$row['lieu'];
    $date_animation=$row['date_animation'];

    //on formate la date
    $date=strftime('%d/%m/%Y');

    //affichage
    echo "<h1>$titre</h1>";
    echo "$categorie.<br>";
    echo "<i>Cet article a été publié le $date_pub</i> par $auteur.<br>";
    echo "<p>$texte</p>";
    echo "<p>Date de la manifestation : $date_animation</p>";
    echo "<p>Lieu de la manifestation : $lieu</p>";
    ?>
    <a href="../index.php"><input type="button" value="Retour"></a>
    </body>
</html>