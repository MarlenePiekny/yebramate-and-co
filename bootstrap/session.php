



<?php
session_start();

if (!isset ($_SESSION['cart'])) {
    initCart();
}
