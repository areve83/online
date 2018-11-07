<html>
    <?php

        include_once 'config_connect.php';

        //création de la requête
        $sql='SELECT id_article, titre, categorie, date_publication, texte FROM news ORDER BY date_publication DESC LIMIT 0,3';

        //exécution de la requête
        $sth=$pdo->query($sql);
        $result=$sth->fetchAll();

        foreach ($result as $row)
        {
            $titre=$row['titre'];
            $categorie=$row['categorie'];
            $date_pub=$row['date_publication'];
            $id_article=$row['id_article'];
            $texte=$row['texte'];

        //on formate la date
        $date=strftime('%d/%m/%Y', strtotime($row['date_publication']));

    //affichage
    echo "<a href='detail.php?id_article=$id_article'><b>$titre</b></a><br>";
    echo "<p><i>Catégorie : $categorie</i></p>";
    echo "<p>$texte</p>";
    }
    $pdo = null; //déconnecte de la BDD
    ?>

</html>