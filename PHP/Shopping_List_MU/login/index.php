<?php

require_once('../config.php');
require_once(APP_DIR . '/model/database.php');
require_once(APP_DIR . '/model/UserService.php');

use \UserService;

session_start();
if (isset($_SESSION['user_id'])) {
    $current_user = $_SESSION['user_id'];
} else {
    $current_user = false;
}

$userService = new UserService();
$errors = [];

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'login';
}

switch ($action) {
    case 'logout':
        //Implement
        break;

    case 'register_new_user':
        //PART 1 STEP 2
        include './register_new_user_view.php';
        break;

    case 'show_register_form':
       //PART 1 STEP 1
        include './register_new_user_view.php';
        break;

    case 'update_user':
        //PART 2
        break;

    case'show_update_form':
        $user = $userService->getUserById($current_user);
        $page = [
            'action' => 'update_user',
            'cancel_link' => '../',
            'heading' => "Update your details {$user['full_name']}",
            'button' => 'Update'
        ];
        include './update_user_view.php';
        break;


    case 'show_password_change_form':
        //Part 4 step 2
        break;

    case 'change_password':
        //PART 4 step 4
        break;

    case 'login_submit':
        $uname = filter_var($_POST['uname'], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        //$user = is_user_authenticated($uname, $password);
        $user = $userService->authenticateUser($uname, $password);
        if ($user) {
            $_SESSION['user_id'] = $user['user_id'];
            header('Location: ../'); //go to home page
            exit();
        }
        $errors[] = "Incorrect combination of username/email AND password<br>Please try again";
        include './login_view.php';
        break;
    case 'login':
    default :
        include './login_view.php';
}
