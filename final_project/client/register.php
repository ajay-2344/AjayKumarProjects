<?php

include_once '../shared/connection.php';

$name = $_POST['name'];
$password = $_POST['password'];

$mobile = $_POST['mobile'];
$address = $_POST['address'];

$cmd = "insert into clients(name, password, mobile, address) values('$name', '$password', '$mobile' , '$address')";

$sql_status = mysqli_query($conn, $cmd);

if($sql_status)
{
    echo "<h2> Success </h2>";
}
else
{
    echo "<h3> Registration Failed/User Already Registered </h3>";
}

?>