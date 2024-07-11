<?php

include_once '../shared/connection.php';

session_start();

$local_cart = $_SESSION['cart'];
$client_data = $_SESSION['client_data'];

$cname = $client_data['name'];
$cid = $client_data['cid'];
$cmobile = $client_data['mobile'];
$caddress = $client_data['address'];

for($i = 0; $i<count($local_cart); $i++)
{
    $pid = $local_cart[$i];
    $cmd = "insert into orders(client_id, client_name, client_mobile, client_address, product_id)
                                values($cid, '$cname', '$cmobile', '$caddress', $pid)";

    $sql_status = mysqli_query($conn, $cmd);
}

if(!$sql_status)
{
    echo "<h2>Error in placing order!";
    die;
}
else
{
    echo "<h2>Ordered Placed Successfully!</h2>";
}

?>