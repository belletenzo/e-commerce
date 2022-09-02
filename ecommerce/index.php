<?php
include 'templates/head.php';
include 'templates/header.php';

include 'inc/connection.php';
include 'inc/database.php';
include 'inc/utils.php';

$db = connection();

$products = getAllProducts($db);
?>
    <div class="container-fluid w-75 mt-4">
        <div class="row">

            <?php
            foreach ($products as $id => $product) :
                ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card mb-4 shadow-sm border border-3 border-light">

                        <div class="card-body ">

                            <form action="cart.php" method="POST">

                                <div class="product">
                                    <h3><?= $product['name'] ?></h3>
                                    <p>Price : <?= toEuros($product['price']) ?> €</p>
                                    <p>Promo : <?= $product['discount'] ?></p>
                                    <p>Stock : <?= $product['quantity'] ?></p>
                                    <input type="number" name="quantity" value="0" min="0"
                                           max="<?= $product['quantity']; ?>">
                                    <input type="hidden" name="id" value="<?= $product['id'] ?>">
                                    <?php if ($product['quantity'] == 0): ?>
                                        <input type="submit" value="Plus disponible !" disabled>
                                    <?php else: ?>
                                        <input type="submit" value="Ajouter au panier">
                                    <?php endif; ?>
                                </div>
                        </div>
                        <p><img src="<?= $product["image"] ?>" alt="" class="w-100 img-fluid"></p>
                    </div>
                </div>
                </form>
            <?php endforeach; ?>

            </form>
        </div>
    </div>

<?php include 'templates/footer.php'; ?>