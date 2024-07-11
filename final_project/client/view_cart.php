<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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

// session_start();

include 'menu.php';

include_once '../shared/connection.php';

$local_cart = $_SESSION['cart'];

if(count($local_cart) == 0)
{
    echo "No items in cart.";
    die;
}

$res = implode(",", $local_cart);

$cmd = "select * from products where pid in ($res)";

$sql_obj = mysqli_query($conn, $cmd);

$total_rows = mysqli_num_rows($sql_obj);

echo "<br>";
$total_price = 0;

echo "<div class='d-flex'>";

echo "<div class='w-75 d-flex flex-wrap justify-content-start'>";

for($i=0; $i<$total_rows; $i++)
{
    $row = mysqli_fetch_assoc($sql_obj);
    $pid = $row['pid'];
    $name = $row['name'];
    $price = $row['price'];
    $details = $row['details'];
    $imgname = $row['imgname'];

    echo "
            <div class='card mt-5' style='width:400px'>
                <img class='card-img-top' src='../images/$imgname' alt='Card image'>
                <div class='card-body'>
                    <h4 class='card-title'>$name <span class='text-danger'>Rs $price </span></h4>
                    <p class='card-text'>$details</p>
                    <div class='d-flex justify-content-between'>                
                        <a href='remove_from_cart.php?pid=$pid'> <button class='btn btn-warning'><i class='fa-solid fa-trash-can'></i></button></a>                                      
                    </div>
                </div>
            </div>
         ";
    
    $total_price += $row['price'];
}

echo "</div>";

echo "
        <div class='w-25 bg-secondary text-white'>
            <h2>Total Price = Rs $total_price</h2>
            <div class='text-center'>
                <a href='place_order.php'>
                    <button class='btn btn-success p-3 mt-4'>Place Order</button>
                </a>
            </div>
        </div>
     ";

echo "</div>";

?>