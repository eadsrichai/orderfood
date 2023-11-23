<?php
    $id_user = $_GET['id_user'];
    $id_food = $_GET['id_food'];
    $quntity_food = $_GET['quntity_food'];
    $price_food = $_GET['price_food'];
    $price_order = $_GET['price_order'];

    echo  "id_food". $id_food . "<br>";
    echo  "id_user".$id_user . "<br>";
    echo  "quntity_food" .$quntity_food . "<br>";
    echo   "price_food".$price_food;
    echo   "price_order".$price_order;


    include_once('../system/db.php');

    $sql1 = "INSERT INTO `order_food` (`order_id`, `id_user`, `id_food`, `date_order`, `quntity_food`, `price_order`, `status_order`) 
             VALUES (NULL, '$id_user', '$id_food',now(), '$quntity_food', '$price_order', '1')";


    $stmt = $conn->prepare($sql1);
  
    if (!$stmt->execute()) {
        echo "Error inserting data into database: " . $stmt->error;
        exit;
    }

    $stmt->close();
    $conn->close();
    header( "location: index.php?menu=4" );
    exit(0);

?>