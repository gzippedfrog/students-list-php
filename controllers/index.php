<?php


$students = $studentsGateway->getStudents($_GET['search'] ?? '');
// echo '<pre>' . htmlspecialchars(var_dump($students)) . '</pre>';
// die();

require 'views/index.view.php';