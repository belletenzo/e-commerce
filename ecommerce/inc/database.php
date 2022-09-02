<?php 

function getAllProducts($db) {
  $query = 'SELECT * FROM products';
  
  $sql = $db->prepare($query);
  $sql->execute();
  return $sql->fetchAll(PDO::FETCH_ASSOC);
}

function getProductById($productId, $db) {
  $query = "SELECT * FROM products WHERE id = $productId";
  
  $sql = $db->prepare($query);
  $sql->execute();
  return $sql->fetch(PDO::FETCH_ASSOC);
}

function addToOrder($db,$product_id,$quantity){
    $customer_id= rand(1,3);
    $number = rand(00000000001,9999999999);
    $query= ("INSERT INTO orders( id,number,customer_id,date,total) VALUES ('','$number','$customer_id','2015','')");
    $sql = $db->prepare($query);
    $sql->execute();
    $order_id = $db->lastInsertId();
    addProductOrder($db,$product_id,$quantity,$order_id);

}

function addProductOrder($db,$product_id,$quantity,$order_id)
{
    $query = ("INSERT INTO order_product (order_id,product_id,quantity) VALUES($order_id,$product_id,$quantity)");
    $sql = $db->prepare($query);
    $sql->execute();
}