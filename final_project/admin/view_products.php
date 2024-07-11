<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>

        .card-img-top
        {
            width: 400px !important;
            height: 300px;
        }

    </style>

</head>
<body>
    
</body>
</html>



<?php

include 'menu.html';
include_once '../shared/connection.php';

$sql_obj = mysqli_query($conn, 'select * from products');

$total_count = mysqli_num_rows($sql_obj);
echo "<div class='d-flex flex-wrap justify-content-around'>";

for($i=0; $i<$total_count; $i++)
{
    $row = mysqli_fetch_assoc($sql_obj);

    $pid = $row['pid'];
    $name = $row['name'];
    $price = $row['price'];
    $details = $row['details'];
    $imgname = $row['imgname'];

    echo "
        <div class='card mt-5' style='width: 400px'>
            <img class='card-img-top' src='../images/$imgname' alt='Card Image'>
            <div class='card-body'>
                <h4 class='card-title'>$name <span class='text-danger'>Rs $price</span></h4>
                <p class='card-text'>$details</p>
                <div class='d-flex justify-content-between'>
                    <a href='editpdt.php?pid=$pid'> <button class='btn btn-warning'> <i class='fa-solid fa-pen-to-square'></i></button></a>
                    <a href='deletepdt.php?pid=$pid'> <button class='btn btn-danger'> <i class='fa-solid fa-trash-can'></i></button></a>
                </div>
            </div>
        </div>
        ";
}

echo "<div>";

?>