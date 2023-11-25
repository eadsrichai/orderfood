
        <div>
            <p>
                ประวัติการสั่งซื้อ
            </p>
        </div>
        <hr>
        <?php
    
        include_once('../system/db.php');
        $id_user = $_SESSION['id_user'];
        $sql = "SELECT  order_food.order_id,order_food.date_order,order_food.quntity_food,
        order_food.price_order,food.name_food,food.img_food,food.id_food
        FROM  order_food,food
        WHERE order_food.id_food = food.id_food
        ANd   order_food.id_user like '$id_user'";

        $result = $conn->query($sql);
        ?>
        
        <?php
        
        while ($row = $result->fetch_assoc()) { ?> 
            <table>
                <tr>
                    <td><img style="width:70px;" src="../data/<?php echo $row['img_food']; ?>"></td>
                    <td>หมายเลข order <?php echo $row['order_id'];  ?></td>
                    <td>วันที่สั่งซื้อ <?php echo $row['date_order'];  ?></td>
                    <td>จำนวน <?php echo $row['quntity_food'];  ?></td>
                    <td>ราคารวม <?php echo $row['price_order'];  ?>บาท</td>
                    <td>ชื่อสินค้า <?php echo $row['name_food'];  ?></td>
                    <td><a href="index.php?menu=5&order_id=<?php  echo $row['order_id'];   ?>">แก้ไขการสั่งซื้อ</a></td>
                    <td><a href="food-delete-history.php?order_id=<?php echo $row['order_id'];  ?>">ลบ</a></td>
                    
                </tr>
            </table>   
<?php }
$result->close();
$conn->close();
?>



