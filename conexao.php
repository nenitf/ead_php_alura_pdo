<?php

$pdo = new PDO("pgsql:host=localhost;port=5432;dbname=ead_php_alura_pdo;user=postgres;password=123456");

$pdo->exec('CREATE TABLE students (id SERIAL, name TEXT, birth_date TEXT);');