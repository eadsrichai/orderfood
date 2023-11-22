<ul>
    เลือกประเภทอาหาร <br>
        <?php 
        include_once('../system/db.php');
        $sql = "SELECT id_type,name_type 
                FROM  type_food";
        $result = $conn->query($sql);
        ?>
        <?php
        while ($row = $result->fetch_assoc()) { ?> 
                <a href="index.php?menu=<?php  echo $row['id_type']?>"> 
                         <?php  echo $row['name_type']?>
                </a><br>
        <?php } ?>

        <a href="index.php?menu=1">แสดงรายการอาหารทั้งหมด</a>