<?php

// le front-controller avec les routes

//Tableau qui repertorie l'ensemble des pages accessibles depuis le Front controller
$map = [
    '404' => 'resources/views/errors/404.php',
    'home' => 'app/controllers/homeController.php',
    'product' => 'app/controllers/showController.php',
    'cart' => 'app/controllers/cartController.php'
    ];

if (filter_has_var(INPUT_GET, 'action')){
    //L'utilisateur demande une action dans l'URL

    //On affecte l'action de la méthode get dans une variable avec un filtre
    $page = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

    if (!array_key_exists($page, $map)){
        //On affiche la page 404
        $page = "404";
    }

} else {
    //L'utilisateur ne demande pas une action dans l'URL, on le redirige vers l'accueil
    $page = 'home';
}

//On affiche la page demandée
require $map[$page];
