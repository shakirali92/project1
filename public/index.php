<?php
session_start();

// print_r($_SESSION);
// Debuging mode
if($_GET['debug'] == 'died'){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
// Some Constant
define('APP_DIR', dirname(__DIR__));
// phpinfo()
const BASE_PATH = __DIR__.'/../';
require BASE_PATH.'Core/functions.php';
spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    
    require base_path("{$class}.php");
});

//it will return the url of with protocol 
// function url($path) {
//     $url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
//     $url .= str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath($path));
//     return $url;
// }

// dd(url('' ));
// dd($_GET);
$router = new Core\Router();
$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

// Load the controller which access 
$router->route($uri, $method);




