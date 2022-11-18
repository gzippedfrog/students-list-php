<?php

declare(strict_types=1);

require __DIR__ . "/../database/connect.php";
require __DIR__ . "/../autoload.php";

$studentsGateway = new StudentsGateway($pdo);
$students = $studentsGateway->getAllStudents();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student = new Student;

    $student->name = strval(trim($_POST['name']) ?? '');
    $student->surname = strval(trim($_POST['surname']) ?? '');
    $student->group_number = strval(trim($_POST['group_number']) ?? '');
    $student->points = intval(trim($_POST['points']) ?? 0);

    $errors = StudentValidator::validate($student);
}

require __DIR__ . '/../view/list.phtml';
