<?php
function get_all_tags() {
    $db = Database::getDB();
    $query = "
        Select
          tags.id As `tag_id`,
          tags.name As `tag_name`
        From
          tags
        Where
          tags.id > 1      
        ";
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        display_db_error($e->getMessage());
        exit;
    }
}
