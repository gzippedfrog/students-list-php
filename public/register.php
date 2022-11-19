<?php
require __DIR__ . "/../database/connect.php";
require __DIR__ . "/../src/autoload.php";

$studentsGateway = new StudentsGateway($pdo);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = [];
    $student = new Student;

    $student->name = strval(trim($_POST['name'] ?? ''));
    $student->surname = strval(trim($_POST['surname'] ?? ''));
    $student->group_number = strval(trim($_POST['group_number'] ?? ''));
    $student->points = intval(trim($_POST['points'] ?? 0));

    $errors = StudentValidator::validate($student);

    if ($errors) {
        $result['error'] = 'Не удалось добавить/изменить запись';
    } else {
        $studentsGateway->addStudent($student);
        $result['success'] = 'Запись успешно добавлена/изменена';
    }
}

require __DIR__ . '/../view/register.phtml';
