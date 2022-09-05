<?php
include 'templates/head.php';
include 'templates/header.php';
include 'inc/connection.php';
include 'inc/database.php';
include 'inc/utils.php';

session_start();

$_SESSION['id'] = intval($_POST['id']);
$_SESSION['quantity']= intval($_POST['quantity']);
// Initialiser le panier dans la session la première fois
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

// Connexion à la base de données
$db = connection();


// On ajoute le produit au panier
$product_id = intval($_POST['id']);
$product = getProductById($product_id, $db);

//var_dump($product);

// A revoir ...
$quantity = intval($_POST['quantity']);
$price = $product['price'];
$name = $product['name'];
$total = $quantity * $price;
// On retire du panier si 0
if ($quantity == 0) {
    unset($_SESSION["cart"][$product_id]);

    // Déjà dans le panier, mise à jour de la quantité
} elseif (isset($_SESSION["cart"][$product_id])) {
    $_SESSION["cart"][$product_id]["quantité"] += $quantity;
    $_SESSION["cart"][$product_id]["total"] += $total;

    // Ajout au panier
} else {
    $_SESSION["cart"][$product_id] = [
        'quantité' => $quantity,
        'price' => $price,
        'name' => $name,
        'total' => $total,
    ];
}

// On calcule le total du panier
$totalCartPrice = calcTotalCart($_SESSION["cart"]);
?>

<pre>
<!--  --><?php //var_dump($_SESSION["cart"]); ?>
</pre>

<div class="container-fluid w-75 mt-4">
    <div class="row ">

<table>
    <thead>
    <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Unit price</th>
        <th>Total Price</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($_SESSION["cart"] as $productId => $item) : ?>
        <tr>
            <td><?= $item['name'] ?></td>
            <td><?= $item['quantité'] ?></td>
            <td><?= toEuros($item['price']); ?> €</td>
            <td><?= toEuros($item['total']); ?> €</td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td></td>
        <td></td>
        <td>Total cart</td>
        <td><?= toEuros($totalCartPrice); ?> €</td>
    </tr>
    </tbody>
    </thead>
</table>

<form method="post" action="confirmation.php">
    <input type="hidden" name="cart" value="<?php echo $_SESSION["cart"] ?>">
    <input type="submit" value="Confirmer">
</form>
    </div>
</div>

<?php include 'templates/footer.php'; ?>