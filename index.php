<?php

// Debugging
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

$routes = [
    '' => 'home',
    '404' => '404',
];

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) , '/');

if ( array_key_exists($uri, $routes) ) {
    require 'views/'.$routes[$uri].'.php';
} else {
    header("Location: /404");
}
