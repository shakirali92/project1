<?php
// This file is responsible form login
use Core\Validator;
use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);
$errors = [];
if(isset($_POST['login'])){
    $user['username'] = $_POST['username'];
    $password = $_POST['password'];
        
    if(empty($user['username']) || empty($password)){
        $errors[] = __('All fields are mandatory');
    }
    
    // Check user exists or not
    if(!empty($user['username'])){
        $user = $db->query('select * from user where username = :username', [
            'username' => $user['username']
        ])->find();
    }

    // if(empty($user)){
    //     $errors[] = __('No user found for given username');
    // }

    $ret = password_verify($password, $user['passwd']);
    if(empty($ret)){
        $errors[] = __('Username and Password does not match');
    }

    if(!empty($errors)){
        view("session/create.view.php", [
            'errors' => $errors
        ]);
        return false;
    }

    login($user);
    header('location: /');
    exit();
}

view('session/create.view.php');