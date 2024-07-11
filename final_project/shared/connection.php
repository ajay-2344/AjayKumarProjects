<?php

$conn = new mysqli('localhost', 'root', '', 'e_commerce');

if($conn->connect_error)
{
    echo "<h1>Connection Error!";
    die;
}

?>