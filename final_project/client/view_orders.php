<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</head>
<body>
    
</body>
</html>



<?php

include_once '../shared/connection.php';

$cmd = 'select * from orders order by order_id desc';

$sql_obj = mysqli_query($conn, $cmd);

$total_rows = mysqli_num_rows($sql_obj);


echo "

        <table class='table table-dark' border='1' cellpadding=''>
            <thead>
                <tr>
                    <th>Order Id</th>
                    <th>Product Id</th>
                    <th>Client Id</th>
                    <th>Client Name</th>
                    <th>Client Mobile</th>
                    <th>Client Address</th>
                </tr>
            </thead>
            <tbody>
     ";

for($i=0; $i<$total_rows; $i++)
{
    $row = mysqli_fetch_assoc($sql_obj);
    $oid = $row['order_id'];
    $pid = $row['product_id'];
    $cid = $row['client_id'];
    $cmobile = $row['client_mobile'];
    $caddress = $row['client_address'];
    $cname = $row['client_name'];

    echo "
            <tr>
                <td>$oid</td>
                <td>$pid</td>
                <td>$cid</td>
                <td>$cmobile</td>
                <td>$caddress</td>
                <td>$cname</td>
            </tr>   
         ";
}

echo "
            </tbody>
        </table>
     ";


?>