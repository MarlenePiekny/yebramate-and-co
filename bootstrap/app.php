<?php
// appelle les différents fichiers php (connexion à la base, session,...)
require 'app/helpers/debug.php' ;
require 'app/helpers/price.php' ;
require 'config/database.php' ;
require 'app/persistences/product.php';
require 'app/persistences/cart.php';
require 'bootstrap/session.php';
