<?php  

    
    include_once('../system/db.php');
    $id_food = $_GET['id_food'];
    $status_food = $_GET['status_food'];
    $sql = "UPDATE food SET status_food = ? WHERE id_food like ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $status_food,$id_food,);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header( "location: index.php?menu=1" );
    exit(0);

?>