<?php
require __DIR__ . '/../src/database/connect.php';
require __DIR__ . '/../src/autoload.php';

$studentsGateway = new StudentsGateway($pdo);

$page = intval($_GET['page'] ?? 1);
$perPage = intval($_GET['perPage'] ?? 10);
$cookie_hash = $_COOKIE['student_hash'] ?? null;

$btnMsg = $cookie_hash ? "Изменить данные" : "Регистрация";

try {
    $students = $studentsGateway->getAllStudents($page, $perPage);
} catch (PDOException $e) {
    // if table doesn't exist create and populate it
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

$prevPageLink = $pager->getLinkForPrevPage($page, $perPage);
$nextPageLink = $pager->getLinkForNextPage($page, $perPage);

require __DIR__ . '/../view/list.phtml';