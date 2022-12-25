<?php

$redirect = false;

if (empty($_GET['page'])) {
    $_GET['page'] = 1;
    $redirect = true;
}

if (empty($_GET['sortBy'])) {
    $_GET['sortBy'] = 'first_name';
    $redirect = true;
}

if (empty($_GET['sortDir'])) {
    $_GET['sortDir'] = 'asc';
    $redirect = true;
}

if ($redirect) {
    header('Location: /?' . http_build_query($_GET));
    die();
}

$students = Student::get(...$_GET);

view('index', [
    'students' => $students['list'],
    'pages' => $students['pages'],
    'prevPageLink' => Paginator::getPrevPageLink(),
    'nextPageLink' => Paginator::getNextPageLink($students['pages']),
]);