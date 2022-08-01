<?php


function formatPrice($price){

    $decimals = 2;
    $price = $price/100;

    echo number_format($price, $decimals) . "\n €";
}

function priceExcludingVAT($TTC){

   $HT = (100*$TTC)/(100+20);
   $HT = formatPrice($HT);
    return $HT;
}

