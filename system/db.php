<?php
    $servername = "localhost:3307";
    $username = "orderfood";
    $password = "1234";
    $database = "orderfood";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$database);
    mysqli_set_charset($conn,"utf8mb4");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    //  echo "Connected successfully";
?>