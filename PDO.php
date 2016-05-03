<?php

define("DB_HOST",'localhost');
define("DB_PORT",'3306');
define("DB_NAME",'pour_recursive');
define("DB_USER",'root');
define("DB_PWD",'');


// on essaie de se connecter
try {

    // connexion simple grâce à l'interface PDO
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME.';charset=utf8', DB_USER, DB_PWD);

    // affichage des erreurs (dévelopement)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "Erreur : ".$e->getMessage()."<br/>";
    echo "Numéro d'erreur : ".$e->getCode();
    exit();
}