<div>
    <table>
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>ชื่ออาหาร</th>
                <th>รายละเอียดอาหาร</th>
                <th>ราคา</th>
                <th>ประเภทอาหาร</th>
                <th>ภาพ</th>
                <th colspan="2">ดำเนินการ</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

<?php

include_once('../system/db.php');
$sql = "SELECT food.id_food,food.name_food,food.detail_food,food.price_food,food.img_food,type_food.name_type
        FROM food,type_food
        WHERE food.id_type = type_food.id_type";


$result = $conn->query($sql);
$i = 1;

while ($row = $result->fetch_assoc()) {

?>

            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['name_food']; ?></td>
                <td><?php echo $row['detail_food']; ?></td>
                <td><?php echo $row['price_food']; ?></td>
                <td><?php echo $row['name_type']; ?></td>
                <td><img src="data/<?php echo $row['img_food']; ?>"></td>

                <td>Update</td>
                    
                <td>Delete</td>
                   
<?php
}

?>
 </tbody>
    </table>
</div>