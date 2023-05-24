<?php

$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');
$router->get('/shop', 'shop.php');

$router->get('/register', 'register/create.php')->only('guest');
$router->post('/register', 'register/create.php')->only('guest');
$router->get('/login', 'session/create.php')->only('guest');
$router->post('/login', 'session/create.php')->only('guest');
$router->get('/logout', 'session/destroy.php')->only('auth');

