<?php
require __DIR__ . '/../src/init.php';

$page = intval($_GET['page'] ?? 1);
$perPage = intval($_GET['perPage'] ?? 10);
$sortColumn = $_GET['sortColumn'] ?? 'points';
$sortOrder = $_GET['sortOrder'] ?? 'desc';
$cookie_hash = $_COOKIE['student_hash'] ?? null;

$arr = [];

try {
    $students = $studentsGateway->getAllStudents($page, $perPage, $sortColumn, $sortOrder);
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

$pager = new Pager($totalStudents, $perPage, 'index.php?page={page}&perPage={perPage}&sortColumn={sortColumn}&sortOrder={sortOrder}');
$pages = $pager->getTotalPages();

$sortByNameLink = $pager->getLinkForPage($page, $perPage, 'name', $sortOrder);
$sortBySurnameLink = $pager->getLinkForPage($page, $perPage, 'surname', $sortOrder);
$sortByGroupNumberLink = $pager->getLinkForPage($page, $perPage, 'group_number', $sortOrder);
$sortByPointsLink = $pager->getLinkForPage($page, $perPage, 'points', $sortOrder);

require __DIR__ . '/../templates/list.phtml';