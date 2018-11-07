<html>
    <?php

        include_once 'config_connect.php';

        //création de la requête
        $sql='SELECT id_article, titre, categorie, texte, date_publication FROM news ORDER BY date_publication';

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
    echo "<a href='detail.php?id_article=$id_article'><b>$titre</b></a>"."<br>";
    echo "<i>Catégorie : $categorie</i>.<br> Publié le $date</span><hr>";
    }
    $pdo = null; //déconnecte de la BDD
    ?>

</html>