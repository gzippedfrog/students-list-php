<?php

function dd($value)
{
    header('Content-Type: text/plain');

    var_dump($value);

    die();
}

function abort($error = 404, $message = 'Page does not exist')
{
    require 'views/error.view.php';
}