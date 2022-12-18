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
    die();
}

function validateStudent($student)
{
    $errors = [];

    if (!preg_match('/^[\p{Cyrillic}A-z \'-]{1,255}$/u', $student['first_name'])) {
        $errors['first_name'] = 'Only cyrillic and latin letters, whitespace, \' and -. Length from 1 to 255 characters.';
    }

    if (!preg_match('/^[\p{Cyrillic}A-z \'-]{1,255}$/u', $student['last_name'])) {
        $errors['last_name'] = 'Only cyrillic and latin letters, whitespace, \' and -. Length from 1 to 255 characters.';
    }

    if (!preg_match('/^[\p{Cyrillic}A-z\d]{1,20}$/u', $student['group_number'])) {
        $errors['group_number'] = 'Only cyrillic and latin letters and numbers. Length from 1 to 20 characters.';
    }

    if ($student['points'] < 0 || $student['points'] > 300) {
        $errors['points'] = 'Only values from 0 to 300';
    }

    return $errors;
}