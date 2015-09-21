<?php

class UserService {

    private $db;

    public function __construct() {
        $this->db = Database::getDB();
    }

    function validateUserData($user) {
        $errors = [];
        if (strlen($user['user_name']) < 3) {
            $errors[] = "User name must be 3 characters or more";
        }
        if (strlen($user['email']) < 6) {
            $errors[] = "Please eneter valid email address";
        }
        //.... validate other fields
        //Password it is possible to call the function
        //without  a password (on updates), extra if needed
        if (isset($user['password'])) {
            if (strlen($user['password']) < 3)
                $errors[] = "password too short. It must be 3 characters or more";
        }
        return $errors;
    }

    public function authenticateUser($uname, $password) {
        $user = $this->getUserByUname($uname);
        //get_user_by_uname($uname);

        if ($user === false) {
            return false; //username does not exist
        } else if (!password_verify($password, $user['password'])) {
            return false; //incorrect password
        } else {
            unset($user['password']);
            return $user;
        }
    }

    public function getUserById($user_id) {
        //PART 2
        return false;
    }

    public function getUserByUname($uname) {

        $query = "Select
                users.id AS user_id,
                users.user_name,
                users.full_name,
                users.email,
                users.password
              From
                users
              Where
                (users.user_name = :uname ) 
                Or
                (users.email = :email )
            ";
        try {
            $stmnt = $this->db->prepare($query);
            $stmnt->bindValue(':uname', $uname, PDO::PARAM_STR);
            $stmnt->bindValue(':email', $uname, PDO::PARAM_STR);

            $stmnt->execute();
            $result = $stmnt->fetch();
            $stmnt->closeCursor();

            return $result;
        } catch (PDOException $e) {
            Database::display_db_error($e->getMessage());
            exit;
        }
    }

    public function addUser($user) {

        $query = "INSERT INTO users 
              (user_name, full_name, email, password) 
              VALUES 
              (:uname, :full_name, :email, :password)";
        try {
            $stmnt = $this->db->prepare($query);
            $stmnt->bindValue(':uname', $user['user_name'], PDO::PARAM_STR);
            $stmnt->bindValue(':email', $user['email'], PDO::PARAM_STR);
            $stmnt->bindValue(':password', password_hash($user['password'], PASSWORD_DEFAULT), PDO::PARAM_STR);
            $stmnt->bindValue(':full_name', $user['full_name'], PDO::PARAM_STR);
            $r = $stmnt->execute();

            //create an empty shopping list for new user
            //retrieve user's details including just allocated new user_id from database 
            $user = $this->getUserByUname($user['user_name']);

            //save an empty list for future use, calling function from user_db
            create_new_list($user['user_id']);
        } catch (PDOException $e) {

            if ($e->getCode() == 23000) {
                Database::display_db_error("DATA DUPLICATION: " . $e->getMessage());
            } else {
                Database::display_db_error($e->getMessage());
            }
        }
    }

    public function updateUser($user) {
        //Part 3
    }

    public function changeUserPassword($user_name, $current_password, $new_password) {
        //PART 4
        $user = $this->getUserByUname($user_name);
        //...
    }
}    