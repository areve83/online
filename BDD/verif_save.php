<?php
session_start();

function verification($nom,$pass)
{
    //include 'config_connect.php';
    //Connexion SQL
    $dbhote = 'localhost';
    $dbuser = 'root';
    $dbpass = 'adminareve83';
    $dbbase = 'areve_test';

    $dsn = "mysql:dbname=$dbbase;host=$dbhote";
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    //création de la requete SQL
    $nom_sql = $pdo->quote($nom);
    $pass_sql = $pdo->quote($pass);
    $sql = "SELECT count(*) as nbres FROM inscrits" . " WHERE nom=$nom_sql AND password=$pass_sql";

    //execution de la requete
    $result=$pdo->query($sql);
    $row=$result->fetch();
    $result = null;
    if ($row['nbres'] == 1)
    {
        return TRUE;
    }
    else{
        return FALSE;
    }
}

//Si on a reçu les donnees d'un formulaire
if (isset($_POST['pseudo']) && isset($_POST['motdepasse']))
{
    //on les recupere
    $nom=$_POST['pseudo'];
    $motdepasse=$_POST['motdepasse'];

    //on teste si ils sont valides
    if(verification($nom, $motdepasse))
    {
        //mdp valide, utilisateur identifié
        //on change l'identification de la session
        session_regenerate_id();

        //on sauvegarde le nom dans la session
        $_SESSION['nom']=$nom;
        $message="Vous êtes correctement identifié.<br>";
        echo $_SESSION['nom'];
        $message.='<a href="redaction.php"><input type="button" value="Suite"></a>';
        //header('Location:redaction.php');
    }
    else
    {
        $message = 'Mauvais mot de passe.<br><br>';
        $message.='<a href="identification.php"><input type="button" value="Retour"></a>';
    }
}
else
{
    //un des champs n'est pas rempli
    $message="Le login ou le mot de passe est vide.<br> ";
    $message.='<a href="identification.php"><input type="button" value="Retour"></a>';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Identification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php echo $message ?>
</body>
</html>
