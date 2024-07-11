<?php

session_start();
$pid = $_GET['pid'];

$local_cart = $_SESSION['cart'];

$res = in_array($pid, $local_cart);

if($res)
{
    echo "<h1>Already in cart.</h1>";
    echo "<a href='view_products.php'> Back to Products. </a>";
}
else
{
    array_push($local_cart, $pid);
    $_SESSION['cart'] = $local_cart;
    header('location:view_products.php');
}

?>