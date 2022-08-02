<?php


function formatPrice($price){

    $decimals = 2;
    $price = $price/100;
    echo number_format($price, $decimals) . "\n €";
}

function priceExcludingVAT($TTC){

   $HT = (100*$TTC)/(100+20);
    return  $HT;
}

function discountedPrice($price,$promo){
    $promo = $price - ($price * $promo/ 100);
    return $promo;
}