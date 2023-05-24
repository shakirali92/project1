<?php
use Core\Validator;
use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);
$errors = [];
if(isset($_POST['register'])){
    if(empty($_POST['email']) || empty($_POST['password']) || empty($_POST['cnf_password']) || empty($_POST['username'])){
        $errors[] = __('All fields are mandatory');
        // r_print($errors);die();
        view("register/create.view.php", [
            'errors' => $errors
        ]);
        return false;
    }

    $user['username'] = $_POST['username'];
    $user['email'] = $_POST['email'];
    $password = $_POST['password'];
    $cnf_password = $_POST['cnf_password'];
    
    // Validate email 
    if(!Validator::email($email)){
        $errors['email'] = __('Please Provide Valid Email');
    }

    if($password != $cnf_password){
        $errors[] = __('Confrim password does not match !');
        view("register/create.view.php", [
            'errors' => $errors
        ]);
        return false;
    }
    // Check user exists or not
    $exists = $db->query('select * from user where email = :email', [
        'email' => $user['email']
    ])->find();

    if(!empty($exists)){
        $errors['user_exists'] = __('Email :email Alredy Exists!', ['email'=>$user['email']]);
        view("register/create.view.php", [
            'errors' => $errors
        ]);
        return false;
    }

    // All good lets create user
    $db->query('INSERT INTO user(username, email, passwd) VALUES(:username, :email, :passwd)', [
        'username' => $user['username'],
        'email' => $user['email'],
        'passwd' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    login($user);
    
    header('location: /');
    exit();
}


view("register/create.view.php", [
    'errors' => $errors
]);