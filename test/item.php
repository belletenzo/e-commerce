<?php

$name = "Playstation 5";
$price = 500;
$URL = "https://paradoxetemporel.fr/wp-content/uploads/2020/06/PS5-support-verticale-1-1024x683.jpg";

include 'head.php';
include 'header.php';

?>

<html>
    <body>
        <div>
            <p> Nom de l'article : <?= $name ?> </p>
            <p> Prix : <?= $price ?>$ </p>
            <img src= "<?=  $URL ?>" width="500" alt="test"/>
        </div>
    </body>
</html>

<?php include 'footer.php'; ?>