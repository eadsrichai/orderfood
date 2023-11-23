<?php
        include_once('../system/db.php');
        $sql = "SELECT SUM(price_order) as Total,DATE(date_order) as Day
                FROM  order_food
                GROUP BY DATE(date_order)";

        $result = $conn->query($sql);
        ?>
        <table><tr><td>วันเดือนปี</td><td>ยอดขาย</td><td></td></tr>
        <?php
        while ($row = $result->fetch_assoc()) {  ?>
            <tr><td><?php echo $row['Day'];?></td><td><?php echo  $row['Total']; ?> บาท</td></tr> 
        <?php } ?>
        </table>
        <?php


        $sql = "SELECT SUM(price_order) as Total,MONTH(date_order) as Month
        FROM  order_food
        GROUP BY MONTH(date_order)";

        $result = $conn->query($sql);
        ?>
        <table><tr><td>วันเดือนปี</td><td>ยอดขาย</td><td></td></tr>
        <?php
        while ($row = $result->fetch_assoc()) {  ?>
        <tr><td><?php echo $row['Month'];?></td><td><?php echo  $row['Total']; ?> บาท</td></tr> 
        <?php } ?>
        </table>
        <?php




        $sql = "SELECT SUM(price_order) as Total,YEAR(date_order) as Year
        FROM  order_food
        GROUP BY Year(date_order)";

        $result = $conn->query($sql);
        ?>
        <table><tr><td>วันเดือนปี</td><td>ยอดขาย</td><td></td></tr>
        <?php
        while ($row = $result->fetch_assoc()) {  ?>
        <tr><td><?php echo $row['Year'];?></td><td><?php echo  $row['Total']; ?> บาท</td></tr> 
        <?php } ?>
        </table>
        <?php



        $result->close();
        $conn->close();
?>




