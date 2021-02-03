<?php
function priceWithVat(float $htPrice, float $vat): float
{
    return $htPrice * (1 + $vat);
}

function formatPrice(float $price): string
{
    return number_format($price/100, 2, ',', ' ') . ' €';
}