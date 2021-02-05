<?php
if (isset($_POST['updateCart'])) { // bouton MAJ cliqué
    updateProductCart();
} else {
    $idSanitized = intval(filter_input(INPUT_POST, 'id',FILTER_SANITIZE_STRING));
    $quantitySanitized = intval(filter_input(INPUT_POST, 'number',FILTER_SANITIZE_STRING));
    addProductCart($idSanitized, $quantitySanitized);
}
require_once 'resources/views/layouts/header.php';
var_dump($_POST);
//var_dump($_SESSION['cart']);
require 'resources/views/cart/index.php';

