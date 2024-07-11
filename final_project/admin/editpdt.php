<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Products</title>

    <style>

        .thumbnail
        {
            margin: 20px;
            width: 200px;
        }

    </style>

</head>
<body>
    
</body>
</html>





<?php

include 'menu.html';
include_once '../shared/connection.php';

if(!isset($_GET['pid']))
{
    echo "Missing Fields!";
    die;
}

$pid = $_GET['pid'];

$sql_obj = mysqli_query($conn, "select *from products where pid=$pid");

$row=mysqli_fetch_assoc($sql_obj);

$name = $row['name'];
$price= $row['price'];
$details = $row['details'];
$imgname = $row['imgname'];




echo "

    <div class='d-flex justify-content-center align-items-center vh-100'>

        <form class='bg-warning p-4' method='POST' action='updatepdt.php' enctype='multipart/form-data'>

            <h3 class='text-center' > Edit Product </h3>

            <input value=$name required type='text' name='name' placeholder='Product Name' class='mt-3 form-control'>
            <input value=$price required type='number' name='price' placeholder='Product Price' class='mt-3 form-control'>

            <textarea required name='details' placeholder='Product Description' id='' cols='30' rows='5' class='mt-3 form-control'>$details</textarea>

            <img class='thumbnail' src='../images/$imgname'>

            <input required class='mt-3 form-control' name='pdt_image' type='file' accept='image/*'>

            <input class='form-control mt-3 btn btn-success' type='submit' value='Upload'>

        </form>

    </div>

     ";