<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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

include 'menu.php';

// session_start();

if(isset($_SESSION['login_status']))
{
    if($_SESSION['login_status'] == false)
    {
        echo "<h1>Access Denied</h1>";
        die;
    }
}
else
{
    echo "<h1>Access Denied</h1>";
    die;
}

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
                    <a href='add_to_cart.php?pid=$pid'> <button class='btn btn-warning'> <i class='fa-solid fa-cart-arrow-down'></i></button></a>
                    <a href='add_to_cart.php?pid=$pid'> <button class='btn btn-danger'> <i class='fa-solid fa-bag-shopping'></i></button></a>
                </div>
            </div>
        </div>
        ";
}

echo "<div>";

?>