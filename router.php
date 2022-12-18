<?php

$routes = [
    '/' => 'index.php',
    '/students/edit' => 'edit.php',
];

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if (array_key_exists($uri, $routes)) {
    require 'controllers/' . $routes[$uri];
} else {
    abort();
}