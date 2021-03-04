<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$createTableSql = '
    CREATE TABLE IF NOT EXISTS students (
        id SERIAL,
        name TEXT,
        birth_date TEXT,
        PRIMARY KEY (id)
    );

    CREATE TABLE IF NOT EXISTS phones (
        id SERIAL,
        area_code TEXT,
        number TEXT,
        student_id INT,
        PRIMARY KEY (id),
        FOREIGN KEY(student_id) REFERENCES students(id)
    );
';

$pdo->exec($createTableSql);
