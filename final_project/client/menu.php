<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <style>
        a
        {
            text-decoration: none !important;
            color: inherit;
        }
    </style>

</head>
<body>
    
    <div class="d-flex justify-content-between bg-danger text-white py-3" style="position: sticky; top: 0px; z-index: 999;">

        <div class="d-flex">
            <h3>
                <?php

                    session_start();
                    $client_data = $_SESSION['client_data'];
                    $client_name = $client_data['name'];

                    echo "Hi!, $client_name";

                ?>
            </h3>

            <div class="m-3">
                <a href="view_products.php">Home Page</a>
            </div>

            <div class="m-3">
                <a href="view_cart.php">View Cart</a>
            </div>

            <div class="m-3">
                <a href="view_orders.php">View Orders</a>
            </div>

            <div class="m-3">
                <a href="login.html">Login</a>
            </div>

            <div class="m-3">
                <a href="logout.php">Logout</a>
            </div>
        </div>

        <a class="ml-5" href="view_cart.php">
            <button class='btn btn-warning'> <i class='fa fa-2x fa-shopping-cart'> </i> </button>
            <h2 style='display:inline'>
                <?php
                        $cnt=count($_SESSION['cart']);
                        echo "$cnt";
                ?>
            </h2>
        </a>

    </div>






</body>
</html>