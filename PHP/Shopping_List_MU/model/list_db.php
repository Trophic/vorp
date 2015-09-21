<?php

define("CURRENT_LIST_TAG", 1);
define("ERROR_TAG", 7);

function add_shopping_item($item, $user_id) {
    $items = get_current_list($user_id);
    $items[] = $item;
    save_list_to_db($items, $user_id);
    return $items;
}

function delete_items($idxs_to_be_deleted, $tag_id, $user_id) {
    $items = get_current_list($user_id);
    
    $deleted_items = [];
    foreach ($idxs_to_be_deleted as $idx) {
        $deleted_items[] = $items[$idx];
        unset($items[$idx]);
    }
    $items = array_values($items);
    
    save_list_to_db($items, $user_id);
    
    //do not log errors
    if ($tag_id != ERROR_TAG) {
        log_purchases_to_db($deleted_items, $tag_id, $user_id);
    }
    return $items;
}

function sort_items($user_id) {
    $items = get_current_list($user_id);
    sort($items);
    return $items;
}

function clear_all_items($user_id) {
    $items = [];
    save_list_to_db($items, $user_id);
    return $items;
}


function get_current_list($user_id) {
    $db = Database::getDB();
    $query = "Select
                lists.list
              From
                lists
              Where
                lists.user_id = :user_id And
                lists.tag_id = :tag_id
            ";
    try {
        $stmnt = $db->prepare($query);
        $stmnt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
        $stmnt->bindValue(':tag_id', CURRENT_LIST_TAG, PDO::PARAM_INT);
        $stmnt->execute();
        $result = $stmnt->fetch();
        $stmnt->closeCursor();
        $items = json_decode($result['list']);
        return $items;
        
    } catch (PDOException $e) {
        display_db_error($e->getMessage());
        exit;
    }
}

function log_purchases_to_db($items, $tag_id, $user_id) {
    $db = Database::getDB();
    $list = json_encode($items);

    $query = "INSERT INTO 
            lists
            ( completed, list, user_id, tag_id) 
            VALUES 
            (NOW(),:list, :user_id, :tag_id)
            ";
    try {
        $stmnt = $db->prepare($query);
        $stmnt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
        $stmnt->bindValue(':tag_id', $tag_id, PDO::PARAM_INT);
        $stmnt->bindValue(':list', $list, PDO::PARAM_STR);
        $stmnt->execute();
        $stmnt->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function save_list_to_db($items, $user_id) {
    $db = Database::getDB();
    $list = json_encode($items);

    $query = "UPDATE lists
              SET 
                list = :list
              WHERE 
                user_id = :user_id 
                AND
                tag_id = :tag_id
            ";
    try {
        $stmnt = $db->prepare($query);
        $stmnt->bindValue(':list', $list, PDO::PARAM_STR);
        $stmnt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
        $stmnt->bindValue(':tag_id', CURRENT_LIST_TAG, PDO::PARAM_INT);
        $row_count = $stmnt->execute();
        $stmnt->closeCursor();
        return $row_count;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
        exit;
    }
}

function create_new_list($user_id){
   $db = Database::getDB();
   
   $list = json_encode(array());

    $query = "INSERT INTO lists
                (list, user_id, tag_id) 
              VALUES 
                (:list, :user_id, :tag_id)
            ";
    try {
        $stmnt = $db->prepare($query);
        $stmnt->bindValue(':list', $list, PDO::PARAM_STR);
        $stmnt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
        $stmnt->bindValue(':tag_id', CURRENT_LIST_TAG, PDO::PARAM_INT);
        $stmnt->execute();
        $stmnt->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
        exit;
    } 
    
}