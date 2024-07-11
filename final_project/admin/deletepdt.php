<?php

include_once '../shared/connection.php';

if(!isset($_GET['pid']))
{
    echo "Missing Fields!";
    die;
}

$pid = $_GET['pid'];

$sql_status = mysqli_query($conn, "delete from products where pid=$pid");

if($sql_status)
{
    header('location:view_products.php');
}
else
{
    //header('location:error.php?msg='Sql_error'');
    echo "Sql Query Failed";
}

?>