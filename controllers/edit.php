<?php

// dd($_SERVER['REQUEST_METHOD']);

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        if (isset($_POST['id'])) {
            $errors = validateStudent($_POST);

            if ($errors) {
                $student = $_POST;
                require 'views/edit.view.php';
            } else {
                $studentsGateway->updateStudent($_POST);
                header('Location: /');
                die();
            }

            break;
        }
    case 'GET':
        if (isset($_GET['id'])) {
            $student = $studentsGateway->getStudentById($_GET['id']);
            $student ? require 'views/edit.view.php' : abort();
        }
        break;
    default:
        header('Location: /');
        die();
}