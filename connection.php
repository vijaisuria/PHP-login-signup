<?php

    $host = "localhost";
    $user = "root";
    $password = "vijai@123";
    $database = "webhunt23";
    $conn = new mysqli($host,$user,$password,$database);

    if($conn->connect_error)
        echo "unable to connect";

?>
