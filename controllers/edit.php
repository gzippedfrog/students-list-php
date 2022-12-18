<?php

$method = $_SERVER['REQUEST_METHOD'];

// dd($_SESSION);
// session_start();
// $_SESSION['message'] = 'success';

if ($method === 'POST' && isset($_POST['id'])) {
    $errors = validateStudent($_POST);

    if (!$errors) {
        $studentsGateway->updateStudent($_POST);

        header('Location: /?success=1');
        // die();
    } else {
        $student = $_POST;
    }

} elseif ($method === 'GET' && isset($_GET['id'])) {
    $student = $studentsGateway->getStudentById($_GET['id']);
    !$student && abort();
}

require 'views/edit.view.php';