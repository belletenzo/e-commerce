<?php


function formatPrice(int $price){

    $decimals = 2;
    $price = $price/100;
    echo number_format($price, $decimals) . "\n €";
}

function priceExcludingVAT(int $TTC){

   $HT = (100*$TTC)/(100+20);
    return  $HT;
}

function discountedPrice(int $price, int $promo){
    $promo = $price - ($price * $promo/ 100);
    return $promo;
}