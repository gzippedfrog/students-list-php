<?php
require __DIR__ . '/../database/connect.php';
require __DIR__ . '/../src/autoload.php';

$studentsGateway = new StudentsGateway($pdo);
$students = $studentsGateway->getAllStudents();

$totalRecords = $studentsGateway->countStudents();
$pager = new Pager($totalRecords, 10, 'index.php?page={page}');
$pages = $pager->getTotalPages();

require __DIR__ . '/../view/list.phtml';
