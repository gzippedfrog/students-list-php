<?php
require __DIR__ . "/../src/database/connect.php";
require __DIR__ . "/../src/autoload.php";

$studentsGateway = new StudentsGateway($pdo);

$errors = [];

if (isset($_COOKIE['student_hash'])) {
    $student = $studentsGateway->getStudentByHash($_COOKIE['student_hash']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = [];
    if (!isset($_COOKIE['student_hash'])) {
    }
    $student = new Student(...$_POST);

    $errors = StudentValidator::validate($student);

    if ($errors) {
        $result['error'] = 'Не удалось добавить/изменить запись';
    } else {
        $studentsGateway->upsertStudent($student);
        setcookie('student_hash', $student->hash, time() + (86400 * 365 * 10), httponly: true);
        $result['success'] = 'Запись успешно добавлена/изменена';
    }
}

require __DIR__ . '/../view/register.phtml';