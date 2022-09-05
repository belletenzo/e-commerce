<?php

include 'templates/head.php';
include 'templates/header.php';

include 'inc/connection.php';
include 'inc/database.php';
include 'inc/utils.php';
require 'Client.php';
require 'templates/ClientsList.php';

$db = connection();

$customers = getAllCustomers($db);

$client = [];

foreach ($customers as $customer)
{
    $client[] = new Client($customer);
}

$clientList = new ClientList($client);

displayClientList($clientList);
