<?php
$id_food = $_GET['id_food'];

include_once('../system/db.php');
        $sql = "SELECT food.id_food,food.name_food,food.detail_food,food.price_food,food.img_food 
                FROM  food WHERE food.id_food like '$id_food'";
        $result = $conn->query($sql);
        ?>
        <form action="food-by.php" method="GET">
        <table onload="cal()">
        <?php
        while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><img src="../data/<?php echo $row['img_food']; ?>"></td>
                
                <td>
                    <?php echo $row['detail_food'] ?> <br>
                    ราคา <?php echo $row['price_food'] ?> บาท <br>
               
                    <input class="input-edit" type="number" readonly value="<?php echo $row['price_food']; ?>"id="price_food"  name="price_food">
                    <input type="text" class="input-edit" value="1"  name="quntity_food" id="quntity_food"/>
                    <input type="button" name="number1" id="number1" class="btn"  onclick="add()"  value="+"/>
                    <input type="button" name="number2" id="number2" class="btn"  onclick="sub()"  value="-"/>
        
                    ราคารวม <input type="text" readonly class="input-edit" value="" id="result" name="price_order"  /> 
                    <input type="hidden" value="<?php echo $row['id_food']; ?>"  name="id_food" >
                    <input type="hidden" value="<?php echo $_SESSION['id_user']; ?>"  name="id_user" >
                    <input type="submit" value="ซื้อ" name="submit"/>    
                </td>
            </tr>
        </table>   
        </form>
<?php   }   ?>

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

