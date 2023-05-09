<?php

use Core\Validator;
use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];


if(isset($_POST['submit'])){
    $file = $_POST['file'];
    echo $file['name'];
}


if (! empty($errors)) {
    return view("notes/create.view.php", [
        'heading' => 'Create Note',
        'errors' => $errors
    ]);
}

$db->query('INSERT INTO notes(title, body, user_id) VALUES(:title, :body, :user_id)', [
    'title' => $_POST['title'],
    'body' => $_POST['body'],
    'user_id' => 1
]);

// header('location: /');
die();
