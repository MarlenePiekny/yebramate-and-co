<?php
require 'app/persistences/product.php';
$products = getAllProducts($bdd);
require 'resources/views/home.php';
