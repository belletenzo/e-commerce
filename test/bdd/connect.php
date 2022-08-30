<?php
$server = "127.0.0.1";
$username = "enzo";
$password ="";
$db = "playground";

sqlCo();

function sqlCo()
{
    $mysqlConnection = new PDO(
        'mysql:host=localhost;dbname=playground;charset=utf8',
        'enzo',
        'Enzo2120'
    );
    return $mysqlConnection;
}

//try {
//    $db = new PDO('mysql:host=localhost;dbname=playground;charset=utf8', 'enzo', 'Enzo2120');
//    echo 'connected';
//} catch (Exception $e) {
//    die('Erreur : ' . $e->getMessage());
//}

