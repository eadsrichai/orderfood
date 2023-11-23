<?php  
    $order_id = $_GET['order_id'];
    $price_food = $_GET['price_food'];
    $quntity_food = $_GET['quntity_food'];
    $price_order = $_GET['price_order'];

    include_once('../system/db.php');
    $sql = "UPDATE order_food SET  quntity_food = ?, price_order = ?  WHERE order_id like ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $price_food,$price_order,$order_id);
  
    
    if(!$stmt->execute()){
        $_SESSION['error'] = "รายการอาหาร รหัส : $order_id ไม่สามารถปรับปรุงได้";
    }else {
        $_SESSION['success'] = "ดำเนินการ ปรับปรุง รายการอาหารรหัส : $order_id เรียบร้อยแล้ว";
    }
    $stmt->close();
    $conn->close();
    header( "location: index.php?menu=4" );
    exit(0);

?>