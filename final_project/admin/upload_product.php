<?php

include_once '../shared/connection.php';

//Validate input details
if(!isset($_FILES['pdt_image']) && !isset($_POST['name']) && ($_POST['price']))
{
    echo "<h3>Server Validation Failed</h3>";
    die;
}

$img = $_FILES['pdt_image'];

$name = $img['name'];

$error = $img['error'];

//Get Time as id
date_default_timezone_set('Asia/Kolkata');
$date_str = date('d_M_Y_H_i_s')."_$name.jpg";

//Check upload error
if($error==1)
{
    echo "<h3>Upload Failed</h3>";
    die;
}

//Get the temp name of image
$temp_name = $img['tmp_name'];
//Move upload file to local folder using temp name
move_uploaded_file($temp_name, "../images/$date_str");

//Get product details from html form
$name = $_POST['name'];
$price = $_POST['price'];
$details = $_POST['details'];

//Connecting database
$conn = new mysqli('localhost', 'root', '', 'e_commerce');

//Storing dproduct details into the database
$cmd = "insert into products(name, price, details, imgname) values('$name', '$price', '$details', '$date_str')";

//Check if upload was a success
$sql_status = mysqli_query($conn, $cmd);

if($sql_status)
{
    header('location:upload_product_fe.php');
}
else
{
    echo "Error in SQL syntax";
}

?>