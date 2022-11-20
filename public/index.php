<?php
require __DIR__ . '/../src/database/connect.php';
require __DIR__ . '/../src/autoload.php';

$studentsGateway = new StudentsGateway($pdo);

$page = intval($_GET['page'] ?? 1);
$perPage = intval($_GET['perPage'] ?? 5);

$students = $studentsGateway->getStudents($page, $perPage);

$totalStudents = $studentsGateway->countStudents();
$pager = new Pager($totalStudents, $perPage, 'index.php?page={page}&perPage={perPage}');
$pages = $pager->getTotalPages();

require __DIR__ . '/../view/list.phtml';
