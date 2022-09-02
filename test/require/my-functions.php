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

function checkAvailability(int $quantity, array $product): void
{
    if ($quantity > $product['stock']) {
        header("Location: http://127.0.0.1/test/index.php");
        exit();
    }
}

function checkQuantity($quantity)
{
    if ($quantity < 1) {
        header("Location: http://127.0.0.1/test/index.php");
        exit();
    }
}

