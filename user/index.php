
<?php 
    session_start(); 
    // if(isset($_SESSION['u']) 
    // && $_SESSION['u'] == null 
    // && isset($_SESSION['p']) 
    // && $_SESSION['p'] == null){
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>ระบบซื้อของออนไลน์</title>
</head>
<body>
    <section id = "page">
        <header>
            <?php include_once('menu-top.php') ?>
        </header>
        <nav>
            <?php include_once('menu-left.php'); ?>
        </nav>
        <main>
            <?php include_once('main-data.php'); ?>
        </main>
        <footer>
            <?php include_once('footer.php'); ?>
        </footer>
    </section>
</body>
</html>


<?php ?> 