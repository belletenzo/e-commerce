<?php 

  function toEuros($price) {
    return $price / 100;
  }

  /**
   * Calculate the total price of the cart
   * 
   * @param array $cart The cart array
   * 
   * @return int The total price of the cart
   */

  function calcTotalCart(array $cart): int
  {
    $total = 0;

    foreach ($cart as $productId => $item) {
      $total += $item['total'];
    }

    return $total;
  }