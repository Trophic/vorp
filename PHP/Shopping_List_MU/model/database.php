<?php

class Database {

    private static $dsn = 'mysql:host=localhost;dbname=shoppinglist';
    private static $username = 'root';
    private static $password = '';
    private static $db;

    private function __construct() {
    }
    public static function getDB() {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn, self::$username, self::$password);
            } catch (PDOException $e) {
                self::display_db_error($e->getMessage());
                die();
            }
        }
        return self::$db;
    }
    public static function display_db_error($error_message) {
        $block = <<<ERR_MSG
        <div id="error">
            <h1>Database Error</h1>
            <p>A database error occurred.</p>
            <p>Error message: $error_message; </p>
            <p>&nbsp;</p>
        </div>
ERR_MSG;
        echo $block;
    }

}

/*

*/