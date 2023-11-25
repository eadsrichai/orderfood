
        <?php 
        include_once('../system/db.php');
        $sql = "SELECT id_type,name_type 
                FROM  type_food";
        $result = $conn->query($sql);
        ?>
        <div class="vertical-menu">
        <?php
        while ($row = $result->fetch_assoc()) { ?> 
                <a href="index.php?menu=3&id_type=<?php  echo $row['id_type']?>&name_type=<?php  echo $row['name_type']?>"><?php  echo $row['name_type']?>
                </a>
                <br>
        <?php } ?>

        <a href="index.php?menu=1">รายการอาหารทั้งหมด</a><br>
        <a href="index.php?menu=4">ประวัติการสั่งอาหาร</a>

        </div>
        