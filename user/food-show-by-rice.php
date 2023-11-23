<?php 
        $id_type = $_GET['id_type'];
        $name_type = $_GET['name_type'];
        ?>
        <div>
            <p>
                ประเภทอาหาร : <?php echo $name_type; ?> 
            </p>
        </div>

        <?php
    
        include_once('../system/db.php');
        $sql = "SELECT food.id_food,food.name_food,food.detail_food,
                food.price_food,food.img_food,type_food.name_type
        FROM    food,type_food 
        WHERE  food.id_type = type_food.id_type 
        AND    type_food.id_type like '$id_type'";

        $result = $conn->query($sql);
        ?>
        
        <?php
        
        while ($row = $result->fetch_assoc()) { ?> 
            <table>
                <tr>
                    <td><img src="../admin/data/<?php echo $row['img_food']; ?>"></td>
                    <td><?php echo $row['detail_food'] ?> <br>
                        ราคา <?php echo $row['price_food'] ?> บาท <br>
                        <a href="index.php?menu=2&id_food=<?php echo $row['id_food'] ?>"> ซื้อ</a>
                    </td>
                </tr>
            </table>   
<?php }
$result->close();
$conn->close();
?>



