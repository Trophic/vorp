<?php
define('SHOPPING_LIST_COOKIE_NAME', 'shopping_list');

function get_shopping_list() {
    if (array_key_exists(SHOPPING_LIST_COOKIE_NAME, $_COOKIE)) {
        return json_decode(base64_decode($_COOKIE[SHOPPING_LIST_COOKIE_NAME]));
    }
    //cookie does not exist (not set or timed out)
    return [];
}

function save_shopping_list($shopping_list) {
    $shopping_list_string = base64_encode(json_encode($shopping_list));
    setcookie(SHOPPING_LIST_COOKIE_NAME, $shopping_list_string, time() + (60 * 2), "/");
}

function add_item(&$shopping_list, $item) {
    array_push($shopping_list, $item);
	save_shopping_list($shopping_list);
}

function delete_item(&$shopping_list, $idx) {
    unset($shopping_list[$idx]);
    $shopping_list = array_values($shopping_list);
	save_shopping_list($shopping_list);
}
?>