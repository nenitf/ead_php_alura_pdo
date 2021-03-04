<?php

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO("pgsql:host=localhost;port=5432;dbname=ead_php_alura_pdo;user=postgres;password=123456");

$statement = $pdo->query('SELECT * FROM students;');
var_dump($statement->fetchAll());
