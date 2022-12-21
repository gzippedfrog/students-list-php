<?php

$students = Student::get($_GET['search'], $_GET['page']);


view('index', [
    'students' => $students['list'],
    'pages' => $students['pages'],
    'prevPageLink' => Paginator::getPrevPageLink(),
    'nextPageLink' => Paginator::getNextPageLink($students['pages']),
]);