<?php


function formatPrice($price){

    $decimals = 2;
    $price = $price/100;

    echo number_format($price, $decimals) . "\n €";
}

