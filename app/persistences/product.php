<?php
function getProduct(PDO $pdo, int $idProduct) :array {
    $result = $pdo->query("SELECT title, description, price, vat
                            FROM products
                            WHERE id = $idProduct");
    $productFeature = $result->fetchAll(PDO::FETCH_ASSOC);
    return $productFeature;
}