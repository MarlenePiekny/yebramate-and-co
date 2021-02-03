<?php
function getProduct(PDO $pdo, int $idProduct) :array {
    $result = $pdo->query("SELECT *
                            FROM products
                            WHERE id = $idProduct");
    $productFeature = $result->fetch(PDO::FETCH_ASSOC);
    if ($productFeature) {
        return $productFeature;
    } else {
        return [];
    }
}

function getAllProducts(PDO $pdo) : array {
    $result = $pdo->query("SELECT * FROM products");
    $products = $result->fetchAll(PDO::FETCH_OBJ);
    return $products;
}