<html>
    <?php

        include_once 'config_connect.php';
        include 'secure.php';

        //création de la requête
        $sql='SELECT id_article, titre, categorie, date_publication FROM news ORDER BY date_publication DESC LIMIT 0,20';

        //exécution de la requête
        $sth=$pdo->query($sql);
        $result=$sth->fetchAll();

        foreach ($result as $row)
        {
            $titre=$row['titre'];
            $categorie=$row['categorie'];
            $date_pub=$row['date_publication'];
            $id_article=$row['id_article'];

        //on formate la date
        $date=strftime('%d/%m/%Y', strtotime($row['date_publication']));

    //affichage
    echo "<a href='supprime_article.php?id_article=$id_article'><b>$titre</b></a><br>";
    }
    ?>

</html>