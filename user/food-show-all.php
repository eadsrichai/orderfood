<?php 
        include_once('../system/db.php');
        $sql = "SELECT food.id_food,food.name_food,food.detail_food,food.price_food,food.img_food 
                FROM  food";
        $result = $conn->query($sql);
        ?>
        <?php
        $i =    0;
        echo "<table>";
        while ($row = $result->fetch_assoc()) { ?> 
            
      <?php
         
            if($i % 2 == 0){
                echo '<tr>';
            } ?>
            <td><img src="../data/<?php echo $row['img_food']; ?>"></td>
            <td><?php echo $row['detail_food'] ?> <br>
                ราคา <?php echo $row['price_food'] ?> บาท <br>
                <a href="index.php?menu=2&id_food=<?php echo $row['id_food'] ?>"> ซื้อ</a>
            </td>
            <?php
            if($i % 2 == 1){
                echo '</tr>';
            }
            $i++;
        }
        
        echo "</table>";

$result->close();
$conn->close();
?>



<!-- <tr>
                    <td><img src="../admin/data/<?php echo $row['img_food']; ?>"></td>
                    <td><?php echo $row['detail_food'] ?> <br>
                        ราคา <?php echo $row['price_food'] ?> บาท <br>
                        <a href="index.php?menu=2&id_food=<?php echo $row['id_food'] ?>"> ซื้อ</a>
                    </td>
                </tr> -->