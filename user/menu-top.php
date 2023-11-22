<ul>
    <li><a href="index.php?menu=1">หน้าหลัก</a></li>

    <?php  if(isset($_SESSION['u']) 
     && $_SESSION['u'] != null 
     && isset($_SESSION['p']) 
     && $_SESSION['p'] != null){?>

    <li>แก้ไขข้อมูลส่วนตัว</li>
    <li>เปลี่ยนรหัสผ่าน</li>
    <li class="login"><a href="../login/logout.php">Logout</a></li>
    <?php  }else { ?> 
    <li class="login"><a href="../login/login.php">Login</a></li>
     
    <?php } ?>
</ul>