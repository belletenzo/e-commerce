<?php
include 'head.php';
include 'header.php';
require "products.php";
require "my-functions.php";
$key = $_POST['key'];
?>

<table>
    <tr>
        <td></td>
        <td> Produit :  </td>
        <td>Prix unitaire :  </td>
        <td>Prix HT :  </td>
        <td>TVA :  </td>
        <td>Quantité :  </td>
        <td>Total TTC :  </td>
    </tr>

    <tr>
        <td><img src="<?php echo $products[$key]['picture_url'] ?>" alt="" width="200"</td>
        <td><?php echo $products[$key]['name']; ?> </td>
        <td><?php formatPrice($products[$key]['price']); ?></td>
        <td><?php formatPrice(priceExcludingVAT($products[$key]['price']) * $_POST['quantité']); ?></td>
        <td><?php formatPrice($products[$key]['price'] - priceExcludingVAT($products[$key]['price'])) ; ?></td>
        <td><?php echo $_POST['quantité']; ?></td>
        <td><?php formatPrice($_POST['quantité'] * $products[$key]['price']); ?> </td>

    </tr>
</table>

