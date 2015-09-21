<?php

require_once  './config.php';

require_once (APP_DIR . '/model/database.php');
require_once(APP_DIR . '/model/list_db.php');
require_once(APP_DIR . '/model/tag_db.php');

$current_user = 17;

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'display_list';
}


$errors = array();

$tags = get_all_tags();

switch ($action) {
    case 'add_item':
        $new_item = $_POST['newitem'];
        if (empty($new_item)) {
            $shopping_list = get_current_list();
            $errors[] = 'The new item cannot be empty.';
        } else {
            $shopping_list = add_shopping_item($new_item, $current_user);
        }
       include './view/home_view.php';
       break;
    
    case 'delete_items':
        if (isset($_POST['checkeditems'])) {
            $check_items = $_POST['checkeditems'];
            $tag_id = $_POST['tag_id'];
            $shopping_list = delete_items($check_items, $tag_id, $current_user);
        } else {
            $shopping_list = get_current_list();
        }
        include './view/home_view.php';
        break;

    case 'print':
        $shopping_list = get_current_list($current_user);
        include './view/print_view.php';
        break;
    
    case 'sort':
        $shopping_list = sort_items($current_user);
        include './view/home_view.php';
        break;
    
     case 'clear':
        $shopping_list = clear_all_items($current_user);
        include './view/home_view.php';
        break;
    
    case 'display_list':
    default :
        $shopping_list = get_current_list($current_user);
        include './view/home_view.php';
        break;
}



