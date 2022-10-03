<?php 

function connection() {

  $host = 'localhost';
  $db = 'ecopro';
  $user = 'enzo';
  $password = 'enzo2120';

  $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

  $db = new PDO($dsn, $user, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  return $db;
}