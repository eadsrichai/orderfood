<?php
$id_food = $_GET['id_food'];

include_once('../system/db.php');
        $sql = "SELECT food.id_food,food.name_food,food.detail_food,food.price_food,food.img_food 
                FROM  food WHERE food.id_food like '$id_food'";
        $result = $conn->query($sql);
        ?>
        <table>
        <?php
        while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><img src="../admin/data/<?php echo $row['img_food']; ?>"></td>
                <td><?php echo $row['detail_food'] ?> <br>
                    ราคา <?php echo $row['price_food'] ?> บาท <br>
                   
                </td>
                <td><input type="number" readonly value="<?php echo $row['price_food']; ?>" size="5" name=""></td>
                <td><input type="number" value="1" size="5" name=""></td>
                <td>ราคารวม <label><?php echo '7' ?></label></td>
                <td> <a href="index.php?menu=2&id_food=<?php echo $row['id_food'] ?>"> ซื้อ</a></td>
            </tr>
        </table>   
<?php
        }

?>