<div>
    <a href="index.php?menu=11">
        เพิ่มข้อมูลอาหาร
    </a>
</div>
<hr>
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
                <th colspan="2">สถานะอาหาร</th>
                <th></th>
            </tr>
            <tr>
                <th></th><th></th><th></th><th></th><th></th><th></th><th colspan="2"></th><th></th><th>มี</th><th>หมด</th><th></th>
            </tr>
        </thead>
        <tbody>

<?php
session_start();
include_once('../system/db.php');
$sql = "SELECT food.id_food,food.name_food,food.detail_food,food.price_food,food.status_food,food.img_food,type_food.name_type
        FROM food,type_food
        WHERE food.id_type = type_food.id_type";


$result = $conn->query($sql);
$i = 1;

while ($row = $result->fetch_assoc()) {
    $id_food = $row['id_food'];
    $s = $row['status_food'];
?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['name_food']; ?></td>
                <td><?php echo $row['detail_food']; ?></td>
                <td><?php echo $row['price_food']; ?></td>
                <td><?php echo $row['name_type']; ?></td>
                <td><img src="data/<?php echo $row['img_food']; ?>"></td>
                <td><a href="food-update.php?id_food=<?php echo $id_food; ?>">Edit</td>
                <td><a href="food-delete.php?id_food=<?php echo $id_food; ?>">Delete</td>
                <td></td>
                <form action="food-status-update.php" method="GET">
                <input type="hidden" value="<?php echo $id_food; ?>" name="id_food"/>
                <?php if($s == '1'){ ?>
                    <td><input type="radio"  value="1" name="status_food" checked></td>
                    <td><input type="radio"  value="0" name="status_food"></td>
                <?php } else {  ?>
                    <td><input type="radio"  value="1" name="status_food"></td>
                    <td><input type="radio"  checked value="0" name="status_food"></td>
                <?php
                }
                ?>
                <td><input type="submit"  value="save" name="save"></td>
                </form>
             
                  
<?php   
}


?>
 </tbody>
    </table>
</div>
<hr>

<?php 
if($_SESSION['error'] != null){ ?>
<div style="color:red;">
    <?php echo $_SESSION['error'];   $_SESSION['error'] = null; ?>
</div>
<?php  } 

if($_SESSION['success'] != null){ ?>
<div style="color:green;">
    <?php echo $_SESSION['success'];   $_SESSION['success'] = null; ?>
</div>
<?php  } ?>