<?php  
    $order_id = $_GET['order_id'];
    include_once('../system/db.php');
    
    $sql = "DELETE FROM order_food  WHERE order_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $order_id);
    

    if(!$stmt->execute()){
        $_SESSION['error'] = "รายการอาหาร รหัส : $id_food มีการอ้างอิงใช้งานในตารางอื่น อยู่ไม่สามารถลบได้";
    }else {
        $_SESSION['success'] = "ดำเนินการลบรายการอาหารรหัส : $id_food เรียบร้อยแล้ว";
    }
    $stmt->close();
    $conn->close();
    header( "location: index.php?menu=4" );
    exit(0);

?>