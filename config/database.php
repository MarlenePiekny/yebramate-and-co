<?php
// outils de connexion à la base
try {
    $bdd = new PDO('mysql:host=localhost;dbname=yebramate;charset=utf8', 'yebramateuser', 'yebramate2021campus');
} catch (PDOExeception $e) {
    print "Erreur ! : " . $e->getMessage();
}