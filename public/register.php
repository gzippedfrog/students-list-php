<?php
require __DIR__ . '/../src/init.php';

$errors = [];
$student_hash = $_COOKIE['student_hash'] ?? null;

if ($student_hash) {
    $student = $studentsGateway->getStudentByHash($student_hash);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $student = new Student(...$_POST, hash: $student_hash);

    $errors = StudentValidator::validate($student);

    if (!$errors) {
        if ($student_hash) {
            $studentsGateway->updateStudent($student);
        } else {
            $studentsGateway->insertStudent($student);
            setcookie('student_hash', $student->hash, time() + (86400 * 365 * 10), httponly: true);
        }
    }
}

require __DIR__ . '/../templates/register.phtml';