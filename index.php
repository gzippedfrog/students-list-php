<?php
declare(strict_types=1);

require 'functions.php';

spl_autoload_register(function ($class_name) {
    require "$class_name.php";
});

$dsn = 'mysql:' . http_build_query(parse_ini_file("config.ini"), '', ';');

$pdo = new PDO($dsn, options: [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
]);

$studentsGateway = new StudentsGateway($pdo);

require 'router.php';