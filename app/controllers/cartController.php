<?php
if (isset($_POST['idProduct'])) {
    $idSanitized = intval(filter_input(INPUT_POST, 'id',FILTER_SANITIZE_STRING));
    $quantitySanitized = intval(filter_input(INPUT_POST, 'number',FILTER_SANITIZE_STRING));
    addProductCart($idSanitized, $quantitySanitized);
}
if (isset($_POST['updateCart'])) { // bouton MAJ cliqué
    updateProductCart();
}
if (isset($_GET['delete'])) {
    $idSanitized = intval(filter_input(INPUT_GET, 'delete', FILTER_SANITIZE_STRING));
    deleteProductCart($idSanitized);
}

require_once 'resources/views/layouts/header.php';
require 'resources/views/cart/index.php';

