<?php
require_once 'resources/views/layouts/header.php';
$products = getAllProducts($bdd);
require 'resources/views/home.php';
