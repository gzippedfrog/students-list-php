<?php
require __DIR__ . '/../src/init.php';

$page = intval($_GET['page'] ?? 1);
$sortColumn = strval($_GET['sortColumn'] ?? 'points');
$searchQuery = strval($_GET['searchQuery'] ?? '');

try {
    [
        'students' => $students,
        'total' => $totalStudents
    ] = $studentsGateway->getAndCountStudents($page, $sortColumn, $searchQuery);
} catch (PDOException $e) {
    if ($e->errorInfo[0] === '42S02') {
        $studentsGateway->createTable();
        $studentsGateway->populateTable();
        [
            'students' => $students,
            'total' => $totalStudents
        ] = $studentsGateway->getAndCountStudents($page, $sortColumn, $searchQuery);
    } else {
        throw $e;
    }
}

$pager = new Pager($totalStudents, 'index.php?page={page}&sortColumn={sortColumn}');
$pages = $pager->getTotalPages();

require __DIR__ . '/../templates/list.phtml';