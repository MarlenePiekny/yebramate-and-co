<?php
function compareQuantities() {
    $stock = getProduct( $pdo, $idProduct);
    foreach($_SESSION['cart'] as $id => $quantity);
        if ($stock['stock'] < $quantity) {
            echo 'plus de stock';
            break;
        }
}

function createOrder($pdo) {
    $result = $pdo->query("INSERT INTO `orders` (`number`, `creation_date`, `delivery_date`, `users_id`)
VALUES ('1', now(), now(), '2');");
}

function createOrderByProducts($pdo) {
    $result = $pdo->query("INSERT INTO `orders_has_products` (`orders_id`, `products_id`, `quantity`, `price`, `title`, `vat`, `weight`)
VALUES ('1', '2', '15', '', '', '', '');");
}