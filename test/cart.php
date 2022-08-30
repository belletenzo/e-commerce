<?php
include 'include/head.php';
include 'include/header.php';

require "products.php";
require "my-functions.php";
global $products;
$key = $_POST['key'];
$quantity = $_POST["quantité"];
checkQuantity($quantity);
checkAvailability($quantity,  $products[$key])
?>

<table>
    <tr>
        <td></td>
        <td> Produit :</td>
        <td>Prix unitaire TTC :</td>
        <td>Prix total HT :</td>
        <td>TVA :</td>
        <td>Quantité :</td>
        <td>Total TTC :</td>
    </tr>

    <tr>
        <td><img src="<?php echo $products[$key]['picture_url'] ?>" alt="" width="200"</td>
        <td><?php echo $products[$key]['name']; ?> </td>
        <td>
            <?php if ($products[$key]['discount'] > 0){ ?>
            <strike><?php formatPrice($products[$key]['price']); ?></strike>
            <?php $products[$key]['price'] = discountedPrice($products[$key]['price'], $products[$key]['discount']); ?>
            <p class="text-danger"> <?php formatPrice($products[$key]['price']); ?>
            <p>
        <td class="text-danger"><?php formatPrice(priceExcludingVAT($products[$key]['price'] * $quantity)); ?></td>
        <td class="text-danger"><?php formatPrice(($products[$key]['price'] - priceExcludingVAT($products[$key]['price'])) * $quantity ); ?></td>
        <td><?php echo $quantity; ?></td>
        <td class="text-danger"> <?php formatPrice($quantity * $products[$key]['price']); ?> </td>
        <?php } else {
            formatPrice($products[$key]['price']); ?>
            <td><?php formatPrice(priceExcludingVAT($products[$key]['price'] * $quantity)); ?></td>
            <td><?php formatPrice(($products[$key]['price'] - priceExcludingVAT($products[$key]['price'])) * $quantity ); ?></td>
            <td><?php echo $quantity; ?></td>
            <td> <?php formatPrice($quantity * $products[$key]['price']); ?> </td>
        <?php } ?>
    </tr>
</table>

<?php include 'include/footer.php'; ?>