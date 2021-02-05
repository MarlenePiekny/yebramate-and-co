<?php
require_once 'resources/views/layouts/header.php';
$productId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
if (empty($productId)) {
    require 'resources/views/errors/404.php';
} else {
    $product = getProduct($bdd, $productId);
    if (empty($product)) {
        echo "Ce produit n'existe pas";
    } else {
        require 'resources/views/product/show.php';
    }
}