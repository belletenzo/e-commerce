<?php
$products = [
    "PC Gamer" => [
        "name" => "PC Gamer",
        "price" => 1500,
        "weight" => 2000,
        "discount" => 10,
        "picture_url" => "https://images.unsplash.com/photo-1542729716-6d1890d980ee?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aW5mb3JtYXRpcXVlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
    ],
    "Playstation 5" => [
        "name" => "Playstation 5",
        "price" => 500,
        "weight" => 700,
        "discount" => 5,
        "picture_url" => "https://images.unsplash.com/photo-1607853202273-797f1c22a38e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=627&q=80",
    ],
    "Xbox" => [
        "name" => "Xbox series x",
        "price" => 500,
        "weight" => 700,
        "discount" => 25,
        "picture_url" => "https://images.unsplash.com/photo-1621259182978-fbf93132d53d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80",
    ],
];
?>


<!--   <table>-->
<!--       <tr>-->
<!--           <td>Nom : --><? //= $products["PC Gamer"]["name"] ?><!-- </td>-->
<!--           <td>Prix : --><? //= $products["PC Gamer"]["price"] ?><!--$ </td>-->
<!--           <td>Poids :--><? //= $products["PC Gamer"]["weight"] ?><!--g </td>-->
<!--           <td>Réduction :--><? //= $products["PC Gamer"]["discount"] ?><!--% </td>-->
<!--           <td> <img src="--><? //= $products["PC Gamer"]["picture_url"]?><!--" alt="" width="200"> </td>-->
<!--       </tr>-->
<!--       <tr>-->
<!--           <td>Nom : --><? //= $products["Playstation 5"]["name"] ?><!-- </td>-->
<!--           <td>Prix : --><? //= $products["Playstation 5"]["price"] ?><!--$ </td>-->
<!--           <td>Poids :--><? //= $products["Playstation 5"]["weight"] ?><!--g </td>-->
<!--           <td>Réduction :--><? //= $products["Playstation 5"]["discount"] ?><!--% </td>-->
<!--           <td> <img src="--><? //= $products["Playstation 5"]["picture_url"]?><!--" alt="" width="200"> </td>-->
<!--       </tr>-->
<!--       <tr>-->
<!--           <td>Nom : --><? //= $products["Xbox"]["name"] ?><!-- </td>-->
<!--           <td>Prix : --><? //= $products["Xbox"]["price"] ?><!--$ </td>-->
<!--           <td>Poids :--><? //= $products["Xbox"]["weight"] ?><!--g </td>-->
<!--           <td>Réduction :--><? //= $products["Xbox"]["discount"] ?><!--% </td>-->
<!--           <td> <img src="--><? //= $products["Xbox"]["picture_url"]?><!--" alt="" width="200"> </td>-->
<!--       </tr>-->
<!--   </table>-->

<table>
    <?php foreach ($products as  $key => $product ){ ?>
    <tr>
        <td><?= $product["name"] . "\n"; ?></td>
        <td><?= $product["price"] . "\n"; ?>$</td>
        <td><?= $product["weight"] . "\n";?>g</td>
        <td><?= $product["discount"] . "\n";?>%</td>
        <td><img src="<?= $product["picture_url"]?>" alt="" width="200"></td>
    </tr>
    <?php } ?>


</table>


