<?php

session_start();

$pid = $_GET['pid'];

$local_cart = $_SESSION['cart'];

$ind = array_search($pid, $local_cart);

array_splice($local_cart, $ind, 1);

$_SESSION['cart'] = $local_cart;

header('location:view_cart.php');

?>