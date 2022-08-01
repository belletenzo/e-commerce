<?php

$product = ["Iphone","Ipad","iMac"];

$length = sizeof($product);
$j = 0;

  for ($i = 0; $i<$length; $i++ ){
      echo $product[$i] . "\n";
  }

  while($j<$length){
      echo $product[$j] . "\n";
      $j++;
  }

  do {
      echo $product[$j] . "\n";
      $j++;
  } while ($j<$length);

//asort($product,SORT_STRING);
//
//print_r($product);

echo reset($product);
echo end($product);