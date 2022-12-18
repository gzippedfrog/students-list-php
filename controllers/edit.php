<?php

if ($_GET['id']) {
    $student = $studentsGateway->getStudentById($_GET['id']);
} else {
    $studentsGateway->updateStudent($_POST);
    header('Location: /');
}

require 'views/edit.view.php';