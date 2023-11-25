
<?php 
        include_once('../system/db.php');
        $sql = "SELECT food.id_food,food.name_food,food.detail_food,
        food.price_food,food.img_food,order_food.order_id,
        order_food.quntity_food,order_food.price_order,order_food.date_order,
        user.fname_user
        FROM  order_food,food,user
        WHERE order_food.id_food = food.id_food
        AND   order_food.id_user = user.id_user";
        $result = $conn->query($sql);
        ?>
        <?php
        while ($row = $result->fetch_assoc()) { ?> 
            <table>
                <tr>
                    <td><img src="../data/<?php echo $row['img_food']; ?>"></td>
                    <td>รายละเอียด <?php echo $row['detail_food'] ?></td>
                    <td>ราคา <?php echo $row['price_food'] ?> บาท </td>
                    <td>สั่งจำนวน <?php echo $row['quntity_food']; ?>  </td>
                    <td>ราคาทั้งหมด <?php echo $row['price_order'] ?> </td>
                    <td>วันที่ <?php echo $row['date_order'] ?> </td>
                    <td>ลูกค้า <?php echo $row['fname_user'] ?> </td>
                </tr>
            </table>   
<?php }
$result->close();
$conn->close();
?>



