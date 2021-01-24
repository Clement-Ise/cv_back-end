<?php
// Lien de récupération des infos 
$parametres = parse_ini_file("param/param.ini");

//connexion à la bdd avec le fichier de parametres
$pdo = new Pdo(['dsn'],['user'],['psw']);
// adresse serveur de l'application
$host = $parametres['host'];

?>