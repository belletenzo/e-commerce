<?php
require 'Item.php';

function toEuros($price)
{
    return $price / 100;
}
/**
 * Calculate the total price of the cart
 *
 * @param array $cart The cart array
 *
 * @return int The total price of the cart
 */

function calcTotalCart(array $cart): int
{
    $total = 0;

    foreach ($cart as $productId => $item) {
        $total += $item['total'];
    }

    return $total;
}

function displayItem(Item $item): void
{ ?>

    <form action="cart.php" method="POST">

        <div class="item">
            <h3><?= $item->getName() ?></h3>
            <p>Price : <?= toEuros($item->getPrice()) ?> €</p>
            <p>Stock : <?= $item->getStock() ?></p>
            <input type="number" name="quantity" value="0" min="0"
                   max="<?= $item->getStock(); ?>">
            <input type="hidden" name="id" value="<?= $item->getId() ?>">
            <?php if ($item->getStock() == 0): ?>
                <input type="submit" value="Plus disponible !" disabled>
            <?php else: ?>
                <input type="submit" value="Ajouter au panier">
            <?php endif; ?>
        </div>
        <p><img src="<?= $item->getImageUrl() ?>" alt="" width="200"></p>
    </form>
<?php } ?>

<?php

function displayCatalogue(catalogue $catalogue) : void
{
    foreach ($catalogue->item as $item) {
        displayItem($item);
    }

}

function displayClient(Client $customer) : void { ?>


<div class="client">
    <h3>ID :<?= $customer->getId() ?></h3>
    <p>First Name : <?= $customer->getFirstName() ?> </p>
    <p>Last Name : <?= $customer->getLastName() ?></p>
    <p>Address :<?= $customer->getAddress(); ?></p>
    <p>Postal Code :<?= $customer->getPostalCode(); ?></p>
    <p>City :<?= $customer->getCity(); ?></p>
</div>

<?php }

function displayClientList(ClientList $clientList) : void
{
    foreach ($clientList->customer as $customer){
        displayClient($customer);
    }
}

?>


