<?php
[
    'host' => $host,
    'db' => $db,
    'charset' => $charset,
    'user' => $user,
    'pass' => $pass
] = parse_ini_file("config.ini");

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET sql_mode='STRICT_ALL_TABLES'"
];

$pdo = new PDO($dsn, $user, $pass, $opt);
