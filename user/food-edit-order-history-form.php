<?php
    $order_id = $_GET['order_id'];
    include_once('../system/db.php');
    
    $sql = "SELECT order_food.order_id,order_food.quntity_food,
            food.img_food,price_order,food.name_food,food.detail_food,food.price_food,
            food.img_food,food.id_food
    FROM    order_food,food
    WHERE   order_food.id_food = food.id_food
    AND	    order_food.order_id like '$order_id'";

    $result = $conn->query($sql);
    ?>
    <form action="food-update-order-history.php" method="GET">
    <table>
    <?php
    if ($row = $result->fetch_assoc()) { ?>
    <tr>
    <td><img style="width:200px;" src="../data/<?php echo $row['img_food']; ?>"></td>
    
    <td>
        <?php echo $row['detail_food'] ?> <br> ราคา <?php echo $row['price_food'] ?> บาท <br>
     
        <input type="hidden" value="<?php echo $order_id?>" name="order_id"/>
    
        <label>ราคาสินค้า</lable>
        <input  type="number" class="input-edit" readonly value="<?php echo $row['price_food']; ?>" 
        id="price_food"  name="price_food">
        <label>จำนวนสินค้า</label>
        <input type="text"  class="input-edit" value="<?php echo $row['quntity_food']; ?>"  name="quntity_food" id="quntity_food"/>
        <input type="button" name="number1" id="number1"  class=""  onclick="add()"  value="+"/>
        <input type="button" name="number2" id="number2"  onclick="sub()"  value="-"/>
         ราคารวม <input type="text" class="input-edit" readonly value="<?php echo $row['price_order']  ?>" id="result" name="price_order"  />
        <input type="hidden" value="<?php echo $row['id_food']; ?>"  name="id_food" >
        <input type="submit" value="แก้ไขการสั่งซื้อ" name="submit"/>    
    </td>
</tr>
</table>   
    </form>
<?php } ?>


<script>
   
            let up = parseInt(document.getElementById("quntity_food").value);
            let sum = parseInt(document.getElementById("price_food").value);
            let q = document.getElementById("quntity_food").value = up;
            document.getElementById("result").value = q * sum;
        

        function add(){
            let up = parseInt(document.getElementById("quntity_food").value);
            let sum = parseInt(document.getElementById("price_food").value);
            let q = document.getElementById("quntity_food").value = up + 1;
            document.getElementById("result").value = q * sum;
        }
        function sub(){
            let down = parseInt(document.getElementById("quntity_food").value);
            if(down <= 1){
                down = 1;
            }else {
                let sum = parseInt(document.getElementById("price_food").value);
                let q = document.getElementById("quntity_food").value = down - 1;
                document.getElementById("result").value = q * sum;
            }
        }
</script>