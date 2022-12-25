<?php

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path("views/$path.view.php");
}

function abort($error = 404, $message = 'Page not found')
{
    view('error');
    die();
}
function validateStudent(Student $student)
{
    $errors = [];

    if (!preg_match('/^[\p{Cyrillic}A-z \'-]{1,255}$/u', $student->first_name)) {
        $errors['first_name'] = 'Only cyrillic and latin letters, whitespace, \' and -. Length from 1 to 255 characters.';
    }

    if (!preg_match('/^[\p{Cyrillic}A-z \'-]{1,255}$/u', $student->last_name)) {
        $errors['last_name'] = 'Only cyrillic and latin letters, whitespace, \' and -. Length from 1 to 255 characters.';
    }

    if (!preg_match('/^[\p{Cyrillic}A-z\d]{1,20}$/u', $student->group_number)) {
        $errors['group_number'] = 'Only cyrillic and latin letters and numbers. Length from 1 to 20 characters.';
    }

    if ($student->points < 0 || $student->points > 300) {
        $errors['points'] = 'Only values from 0 to 300.';
    }

    return $errors;
}

function getUrlWithSortBy($value, $params)
{
    if ($params['sortBy'] === $value) {
        $params['sortDir'] = $params['sortDir'] === 'asc' ? 'desc' : 'asc';
    } else {
        $params['sortBy'] = $value;
        $params['sortDir'] = 'asc';
    }
    $params['page'] = 1;

    return '/?' . http_build_query($params);
}