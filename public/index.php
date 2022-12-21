<?php
declare(strict_types=1);

const BASE_PATH = __DIR__ . '/../src/';

require BASE_PATH . 'functions.php';

spl_autoload_register(function ($class_name) {
    require base_path("$class_name.php");
});

$dsn = 'mysql:' . http_build_query(parse_ini_file(base_path('../config.ini')), '', ';');

$pdo = new PDO($dsn, options: [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => true,
]);

Student::setConnection($pdo);

require base_path('router.php');