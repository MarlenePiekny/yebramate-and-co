<?php
$idSanitized = intval(filter_input(INPUT_POST, 'id',FILTER_SANITIZE_STRING));
$quantitySanitized = intval(filter_input(INPUT_POST, 'number',FILTER_SANITIZE_STRING));

addProductCart($idSanitized, $quantitySanitized);
require_once 'resources/views/layouts/header.php';
require 'resources/views/cart/index.php';

