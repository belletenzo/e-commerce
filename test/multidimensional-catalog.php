<?php
require_once "products.php";
require "my-functions.php";
include 'head.php';
global $products;
?>

<div class="container-fluid w-75 mt-4">
    <div class="row">

        <?php foreach ($products as $key => $product) { ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card mb-4 shadow-sm border border-3 border-light">

                    <div class="card-body ">
                        <p>Nom : <?= $product["name"] . "\n"; ?></p>
                        <p>Prix : <?= formatPrice($product["price"]) . "\n"; ?></p>
                        <p>Prix HT : <?= formatPrice(priceExcludingVAT($product["price"])) . "\n"; ?></p>
                        <p>Poids : <?= $product["weight"] . "\n"; ?>g</p>
                        <p>Promo de : <?= $product["discount"] ?>%
                            = <?= formatPrice(discountedPrice($product["price"], $product["discount"])) . "\n"; ?></p>
                        <p>
                        <form method="post" action="cart.php">
                            <input type="hidden" name="key" value="<?php echo $key ?>">
                            <label for="number">Quantité a acheter : </label>
                            <input type="number" name="quantité"  required min="1">
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


