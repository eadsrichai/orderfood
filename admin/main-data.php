<?php
    if(isset($_GET['menu'])){
        $menu = $_GET['menu'];

        switch($menu){
            case '1' : include_once('food-show-data.php'); break;
            case '11' : include_once('food-add-form.php'); break;
            case '12' : include_once('food-edit-form.php'); break;
            case '13' : include_once('food-delete-form.php'); break;
            case '14' : include_once('food-status-form.php'); break;
            case '21' : include_once('food-order-add-form.php'); break;
            case '22' : include_once('food-order-edit-form.php'); break;
            case '23' : include_once('food-order-delete-form.php'); break;
            case '24' : include_once('food-order-status-form.php'); break;
            case '30' : include_once('food-order-management-status-form.php'); break;
            case '41' : include_once('food-report-order-all.php'); break;
            case '42' : include_once('food-report-order-by-date.php'); break;
            case '43' : include_once('food-report-order-by-date-money.php'); break;
            case '100' : include_once('../login/admin/user-management-form.php'); break;
            case '101' : include_once('../login/admin/user-update-profile-form.php'); break;
            case '102' : include_once('../login/admin/changePasswordForm.php'); break;
            case '103' : include_once('../login/admin/user-management-form.php'); break;

        }
    }
?>