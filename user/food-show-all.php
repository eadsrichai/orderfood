<?php 
        include_once('../system/db.php');
        $sql = "SELECT food.id_food,food.name_food,food.detail_food,food.price_food,food.img_food 
                FROM  food";
        $result = $conn->query($sql);
        ?>
        <?php
        while ($row = $result->fetch_assoc()) { ?> 
            <table>
                <tr>
                    <td><img src="../admin/data/<?php echo $row['img_food']; ?>"></td>
                    <td><?php echo $row['detail_food'] ?></td>
                    <td><?php echo $row['price_food'] ?></td>
                </tr>
            </table>   
<?php }
$result->close();
$conn->close();
?>



