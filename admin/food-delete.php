<?php  
    session_start();
    include_once('../system/db.php');
    
   
    $sql = "DELETE FROM food  WHERE id_food = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id_food);
    $id_food = $_GET['id_food'];

    if(!$stmt->execute()){
        $_SESSION['error'] = "รายการอาหาร รหัส : $id_food มีการอ้างอิงใช้งานในตารางอื่น อยู่ไม่สามารถลบได้";
    }else {
        $_SESSION['success'] = "ดำเนินการลบรายการอาหารรหัส : $id_food เรียบร้อยแล้ว";
    }
    $stmt->close();
    $conn->close();
    header( "location: index.php?menu=1" );
    exit(0);

?>