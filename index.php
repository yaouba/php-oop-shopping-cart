<?php

require_once "Product.php";
require_once "Cart.php";
require_once "CartItem.php";

$product1 = new Product(1, 'Sharp Aquos', 700, 10);
$product2 = new Product(2, 'HDD SAL', 200, 10);
$product3 = new Product(3, 'PC ACER', 1700, 10);

$cart = new Cart();

$cartItem1 = $cart->addProduct($product1, 1);
$cartItem2 = $product2->addToCart($cart, 1);

echo sprintf("Number of items in cart: %s<br>" . PHP_EOL, $cart->getTotalQuantity());

$cartItem1->increaseQuantity();
$cartItem2->increaseQuantity();

echo sprintf("Number of items in cart: %s<br>" . PHP_EOL, $cart->getTotalQuantity());
echo sprintf("Total price of items in cart: %s<br>" . PHP_EOL, $cart->getTotalPrice());

$cart->removeProduct($product2);
echo sprintf("Number of items in cart: %s<br>" . PHP_EOL, $cart->getTotalQuantity());
echo sprintf("Total price of items in cart: %s<br>" . PHP_EOL, $cart->getTotalPrice());
