<?php
require __DIR__ . '/../src/init.php';

$page = intval($_GET['page'] ?? 1);
$perPage = intval($_GET['perPage'] ?? 10);
$cookie_hash = $_COOKIE['student_hash'] ?? null;

$arr = [];

try {
    $students = $studentsGateway->getAllStudents($page, $perPage);
} catch (PDOException $e) {
    if ($e->errorInfo[0] === '42S02') {
        $studentsGateway->createTable();
        $studentsGateway->populateTable();
        $students = $studentsGateway->getAllStudents($page, $perPage);
    } else {
        throw $e;
    }
}

$totalStudents = $studentsGateway->countStudents();

$pager = new Pager($totalStudents, $perPage, 'index.php?page={page}&perPage={perPage}');
$pages = $pager->getTotalPages();

require __DIR__ . '/../templates/list.phtml';