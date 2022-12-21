<?php

$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if ($method === 'POST' && isset($_POST['id'])) {
    $student = new Student(...$_POST);
    $errors = validateStudent($student);

    if (!$errors) {
        $student->save();
        header('Location: /?success=1');
    }

} elseif ($method === 'GET' && isset($_GET['id'])) {
    $student = Student::getById($_GET['id']);
    !$student && abort();
}

view('edit', [
    'title' => $uri === '/edit' ? 'Edit' : 'Register',
    'student' => $student,
    'errors' => $errors
]);