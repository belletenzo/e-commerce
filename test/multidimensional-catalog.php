<?php
$products = [
    "PC Gamer" => [
        "name" => "PC Gamer",
        "price" => 150000,
        "weight" => 2000,
        "discount" => 10,
        "picture_url" => "https://images.unsplash.com/photo-1542729716-6d1890d980ee?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aW5mb3JtYXRpcXVlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
    ],
    "Playstation 5" => [
        "name" => "Playstation 5",
        "price" => 50000,
        "weight" => 700,
        "discount" => 5,
        "picture_url" => "https://images.unsplash.com/photo-1607853202273-797f1c22a38e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=627&q=80",
    ],
    "Xbox" => [
        "name" => "Xbox series X",
        "price" => 50000,
        "weight" => 700,
        "discount" => 25,
        "picture_url" => "https://images.unsplash.com/photo-1621259182978-fbf93132d53d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80",
    ],
];
require "my-functions.php";
?>


<table>
    <?php foreach ($products as  $key => $product ){ ?>
    <tr>
        <td>Nom : <?= $product["name"] . "\n"; ?></td>
        <td>Prix : <?= formatPrice($product["price"]) . "\n"; ?></td>
        <td>Prix HT : <?= formatPrice(priceExcludingVAT($product["price"])) . "\n"; ?></td>
        <td>Poids : <?= $product["weight"] . "\n";?>g</td>
        <td>Promo de : <?= $product["discount"]?>% = <?= formatPrice(discountedPrice($product["price"] ,$product["discount"])) . "\n";?></td>
        <td><img src="<?= $product["picture_url"]?>" alt="" width="200"></td>
    </tr>
    <?php } ?>

</table>


