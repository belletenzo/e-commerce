<?php
include ('connect.php');
include ('database.php');
$db = sqlCo();
$result = selectAllProducts($db);
$result2 = selectAllProductsOutOfStock($db);
$result3 = selectProductByOrderId($db, 1);
$result4 = totalPrice($db);//$result5 = adQuantity();
//$result6 = deleteProduct();