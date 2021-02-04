<?php

//Fonction initCart qui initialise le panier - ne retourne rien
function initCart()
{
    $_SESSION['cart'] = [];
}

//Fonction fakeCart qui peuple le tableau de tableau du panier - ne retourne rien
//pour enlever une dimension : $_SESSION['cart'] = [1 => 2 , 2 => 4, 3 => 6]
function fakeCart()
{
    $product1 = ['id' => 1, 'quantity' => 2];
    $product2 = ['id' => 2, 'quantity' => 4];
    $product3 = ['id' => 3, 'quantity' => 6];
    $_SESSION['cart'][0] = $product1;
    $_SESSION['cart'][1] = $product2;
    $_SESSION['cart'][2] = $product3;
}

//Fonction totalCart qui prend le pdo et retourne le prix total du panier
function totalCart(PDO $pdo): array
{
    $total = 0;
    $nbProduct = 0;
    foreach ($_SESSION['cart'] as $product) {
        $productFeatures = getProduct($pdo, $product['id']);
        $priceHT = $productFeatures['price'];
        $vat = $productFeatures['vat'];
        $total = $total + $product['quantity'] * priceWithVat($priceHT, $vat);
        $nbProduct = $nbProduct + $product['quantity'];
    }
    return [$total,$nbProduct];
}

