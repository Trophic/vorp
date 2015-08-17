<?php
define("APP_DIR", __DIR__);
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

