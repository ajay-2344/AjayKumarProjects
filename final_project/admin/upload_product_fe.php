<?php

include 'menu.html';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Commerce</title>

</head>
<body>
    
    <div class="d-flex justify-content-center align-items-center vh-100">

        <form class="bg-warning p-4" method="POST" action="upload_product.php" enctype="multipart/form-data">

            <h3 class="text-center">Upload Product</h3>

            <input required type="text" name="name" placeholder="Product Name" class="mt-3 form-control">
            <input required type="number" name="price" placeholder="Product Price" class="mt-3 form-control">

            <textarea required name="details" placeholder="Product Description" id="" cols="30" rows="5" class="mt-3 form-control"></textarea>

            <input required class="mt-3 form-control" name="pdt_image" type="file" accept="image/*">

            <input class="form-control mt-3 btn btn-success" type="submit" value="Upload">


        </form>

    </div>







</body>
</html>