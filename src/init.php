<?php
declare(strict_types=1);

require __DIR__ . '/database/connect.php';

spl_autoload_register(function ($class_name) {
    require __DIR__ . "/$class_name.php";
});

$studentsGateway = new StudentsGateway($pdo);