<?php

$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');
$router->get('/shop', 'shop.php');

$router->get('/employees', 'employee/index.php')->only('auth');
$router->get('/note', 'notes/show.php');
$router->get('/note/edit', 'notes/edit.php');
$router->delete('/note', 'notes/destroy.php');

// $router->get('/notes', 'controllers/notes/index.php')->only('auth');
// $router->get('/note', 'controllers/notes/show.php');
// $router->get('/note/edit', 'controllers/notes/edit.php');
// $router->delete('/note', 'controllers/notes/destroy.php');

$router->get('/notes/create', 'notes/create.php');
$router->post('/notes', 'notes/store.php');

$router->get('/register', 'register/create.php')->only('guest');
$router->post('/register', 'register/create.php')->only('guest');
$router->get('/login', 'session/create.php')->only('guest');
$router->post('/login', 'session/create.php')->only('guest');
$router->get('/logout', 'session/destroy.php')->only('auth');

