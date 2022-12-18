<?php

$students = $studentsGateway->getStudents($_GET['search'] ?? '');

require 'views/index.view.php';