<div>
    <div class="sub-menu">เพิ่มข้อมูลอาหาร</div>
    <hr>
    <form action="food-add.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label>ชื่ออาหาร</label></td>
                <td><input type="text" value="" name="name_food" /></td>
            </tr>
            <tr>
                <td><label>รายละเอียดอาหาร</label></td>
                <td><input type="text" value="" size="100" name="detail_food" /><br></td>
            </tr>
            <tr>
                <td><label>ราคา</label></td>
                <td><input type="number" value="" name="price_food" /></td>

            </tr>
            <tr>
                <td><label>ประเภทอาหาร</label></td>
                <td>
                    <?php 
                        include_once('../system/db.php');
                        $sql = "SELECT  * FROM type_food";
                        $result = $conn->query($sql);
                    ?>
                    <select name="id_type">
                        <?php
                        while ($row = $result->fetch_assoc()) { ?>
                        <option value="<?php echo $row['id_type'];  ?>"><?php echo $row['name_type']; ?></option>
                        <?php } ?>
                    </select>
                </td>

            </tr>
            <tr>
                <td><label>ภาพประกอบ</label></td>
                <td><input type="file" value="fileToUpload" name="fileToUpload" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="save" name="submit" /></td>
            </tr>
        </table>
    </form>
</div>