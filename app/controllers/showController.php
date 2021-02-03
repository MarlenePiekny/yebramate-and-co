<?php
    $productId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    require 'app/persistences/product.php';
    $product = getProduct($bdd,$productId);
    require 'resources/views/product/show.php';