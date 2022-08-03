<?php
$products = [
    "PC Gamer" => [
        "name" => "PC Gamer",
        "price" => 150000,
        "weight" => 2000,
        "discount" => 10,
        "picture_url" => "./images/pcgamer.avif",
    ],
    "Playstation 5" => [
        "name" => "Playstation 5",
        "price" => 50000,
        "weight" => 700,
        "discount" => 5,
        "picture_url" => "./images/ps5.avif",
    ],
    "Xbox" => [
        "name" => "Xbox series X",
        "price" => 50000,
        "weight" => 700,
        "discount" => 25,
        "picture_url" => "./images/xboxX.avif",
    ],
    "Switch" => [
        "name" => "Nintendo Switch",
        "price" => 30000,
        "weight" => 200,
        "discount" => 5,
        "picture_url" => "./images/switch.avif",
    ],
];
require "my-functions.php";
include 'head.php';
?>


<div class="container-fluid w-75 mt-4">
    <div class="row">

        <?php foreach ($products as $key => $product) { ?>


            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card mb-4 shadow-sm border border-3 border-info">

                    <div class="card-body ">
                        <p>Nom : <?= $product["name"] . "\n"; ?></p>

                        <p>Prix : <?= formatPrice($product["price"]) . "\n"; ?></p>

                        <p>Prix HT : <?= formatPrice(priceExcludingVAT($product["price"])) . "\n"; ?></p>

                        <p>Poids : <?= $product["weight"] . "\n"; ?>g</p>

                        <p>Promo de : <?= $product["discount"] ?>%
                            = <?= formatPrice(discountedPrice($product["price"], $product["discount"])) . "\n"; ?></p>

                        <p>
                        <form method="post">
                            <label for="number">Quantité a acheter : </label>
                            <input type="number" name="quantité" id="quantité" required min="1">
                            <input type="submit" value="Acheter">
                        </form>
                        </p>
                    </div>

                    <p><img src="<?= $product["picture_url"] ?>" alt="" class="w-100 img-fluid"></p>
                </div>
            </div>

        <?php } ?>

    </div>
</div>


