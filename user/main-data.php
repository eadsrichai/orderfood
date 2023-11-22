<?php
    if(isset($_GET['menu'])){
        $menu = $_GET['menu'];

        switch($menu){
            case '1' : include_once('food-show-all.php'); break;
        
          
        }
    }
?>