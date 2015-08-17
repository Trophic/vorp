<?php
define("APP_DIR", __DIR__);
require(APP_DIR . '/model/shopping_item.php');

if (isset($_POST['action'])) {
	$action = $_POST['action'];
} else if (isset ($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action = 'display_list';
}
switch ($action) {
	case 'add_item':
		$new_item = $_POST['newitem'];
		$shopping_list = get_shopping_list();
	if (empty($new_item)) {
		$errors[] = 'The new item cannot be empty';
	} else {
		add_item($shopping_list, $new_item);
	}
	include (APP_DIR . '/view/home_view.phtml');
	break;
	
	case 'delete_items':
	$shopping_list = get_shopping_list();
	$item_index = $_POST['itemid'];
	delete_item($shopping_list, $item_index);
	include(APP_DIR . '/view/home_view.phtml');
	break;
	
	case 'display_list':
	default :
		$shopping_list = get_shopping_list();
		include(APP_DIR . '/view/home_view.phtml');
}

require_once(APP_DIR . '/model/shopping_list_cookie.php');
$errors = [];
$shopping_list = get_shopping_list();

if (isset($_POST['btnAdd']) && $_POST['btnAdd'] == "Add Item") {
    $shopping_list = get_shopping_list();
    $new_item = $_POST['newitem'];
    if (empty($new_item)) {
        $errors[] = 'The new item cannot be empty.';
    } else {
        add_item($shopping_list, $new_item);
    }
}

if (isset($_POST['btnDelete']) && $_POST['btnDelete'] == "Delete") {
    $shopping_list = get_shopping_list();
	$item_index = $_POST['itemid'];
    delete_item($shopping_list, $item_index);
}

require_once(APP_DIR . '/view/home_view.phtml');

