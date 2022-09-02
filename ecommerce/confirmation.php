<?php
  include 'inc/connection.php';
  include 'inc/database.php';

session_start();
$db = connection();

addToOrder($db,intval($_SESSION['id']),intval($_SESSION['quantity']));
//conf_two($db,);
var_dump($_SESSION);
  
?>

<h1>Confirmation de commande</h1>