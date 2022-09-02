<?php

// function to select all products from the database
function selectAllProducts(PDO $db): array {
    $query = "SELECT * FROM products";
    $result = $db->query($query);
    return $result->fetchAll();

}

// function to select all product out of quantity from the database
function selectAllProductsOutOfStock(PDO $db): array {
    $query = "SELECT * FROM products WHERE quantity = 0";
    $result = $db->query($query);
    return $result->fetchAll(PDO::FETCH_ASSOC);
}


// function to select name, price and quantity of a product with a specific order_id from database
function selectProductByOrderId(PDO $db, $order_id): array {
    $query = "SELECT name, order_product.quantity, price FROM products INNER JOIN order_product ON order_product.product_id = products.id WHERE order_product.order_id=$order_id";
    $result = $db->query($query);
    return $result->fetchAll(PDO::FETCH_ASSOC);

}
//function total price from all orders of today in the database
function totalPrice(PDO $db): array {
    $query = "SELECT SUM((order_product.quantity * products.price)) AS total FROM orders JOIN order_product ON orders.id = order_product.order_id JOIN products ON order_product.product_id = products.id WHERE  date = CURDATE()";
    $result = $db->query($query);
    return $result->fetchAll(PDO::FETCH_ASSOC);
}

//function to add 100 to the quantity of a product
function addQuantity(PDO $db, $product_id) {
    $query = "UPDATE products SET quantity = quantity + 100 WHERE id = $product_id";
    $db->query($query);
}

//function to delete a product from the database
//function deleteProduct(PDO $db, $product_id){
//    $query = "DELETE FROM products WHERE id = $product_id";
//    $db->query($query);
//}

