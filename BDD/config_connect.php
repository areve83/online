<?php

//$user = 'arevefrpbvadmin';
//$pass = 'adminareve83B';
//$dsn = 'mysql:host=arevefrpbvadmin.mysql.db;dbname=arevefrpbvadmin';

define('USER','arevefrpbvadmin');
define('PASS','adminareve83B');
define('DSN','mysql:host=arevefrpbvadmin.mysql.db;dbname=arevefrpbvadmin');


try {
    $pdo=new PDO(DSN, USER, PASS);
    $pdo->exec('SET NAMES "utf8"');
    //gestion des erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    print "Echec de la connexion : ".$e->getMessage();
    exit();
}
?>