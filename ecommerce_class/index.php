<?php
include 'templates/head.php';
include 'templates/header.php';

include 'inc/connection.php';
include 'inc/database.php';
include 'inc/utils.php';

require_once 'Item.php';
require 'Catalogue.php';
require 'templates/ClientsList.php';

$db = connection();

$products = getAllProducts($db);


$item = [];

foreach ($products as $product)
{
    $item[] = new Item($product);
}

$catalogue = new Catalogue($item);

displayCatalogue($catalogue);

?>

<!--<pre>-->
<?php //var_dump($customers); ?>
<!--</pre>-->

<?php include 'templates/footer.php'; ?>