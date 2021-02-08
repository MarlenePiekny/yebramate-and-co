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

// Fonction qui ajoute le produit d'indentifiant $postId au panier en quantité $postNumber
function addProductCart (int $postId, int $postNumber)
{
    if (isset($_SESSION['cart'][$postId])) {
        $_SESSION['cart'][$postId] += $postNumber;
    }

    else {
        $_SESSION['cart'][$postId] = $postNumber;
    }
}

// Fonction qui prend le pdo et retourne le prix total et la quantité de produits du panier
function totalCart(PDO $pdo): array
{
    $total = 0;
    $nbProduct = 0;
    foreach ($_SESSION['cart'] as $id => $quantity) {
        $productFeatures = getProduct($pdo, $id);
        $priceHT = $productFeatures['price'];
        $vat = $productFeatures['vat'];
        $total = $total + $quantity * priceWithVat($priceHT, $vat);
        $nbProduct = $nbProduct + $quantity;
    }
    return [$total,$nbProduct];
}

// fonction qui supprime du panier le produit d'identifiant $idProduct
function deleteProductCart(int $idProduct) {
    unset($_SESSION['cart'][$idProduct]);
}

// fonction de MAJ du panier :
// parcourt le panier et pour chaque id de celui-ci récupère la quantité correspondant au même id dans $_POST
function updateProductCart() {
    foreach($_SESSION['cart'] as $id => $quantity) {
        if ($_POST['qte_'.$id] == 0) {
            deleteProductCart($id);
        } else {
            $_SESSION['cart'][$id] = $_POST['qte_'.$id];
        }
    }
}