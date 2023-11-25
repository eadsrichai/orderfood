<?php
    if(isset($_GET['menu'])){
        $menu = $_GET['menu'];
        if($menu == null) $menu = "1";

        switch($menu){
            case '1' : include_once('food-show-all.php'); break;
            case '2' : include_once('food-by-form.php'); break;
            case '3' : include_once('food-show-by-rice.php'); break; 
            case '4' : include_once('food-show-history.php'); break; 
            case '5' : include_once('food-edit-order-history-form.php'); break; 
            case '10' : include_once('food-edit-order-history-form.php'); break;
            case '101' : include_once('../login/user/user-update-profile-form.php'); break; 
            case '102' : include_once('../login/user/changePasswordForm.php'); break;
            case '13' : include_once('../login/user/changePassword.php'); break;
        
          
        }
    }
?>