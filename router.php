<?php

$routes = [
    '/' => 'index.php',
    '/edit' => 'edit.php',
    '/register' => 'edit.php',
];

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if (array_key_exists($uri, $routes)) {
    require 'controllers/' . $routes[$uri];
} else {
    abort();
}