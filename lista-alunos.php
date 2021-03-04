<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO("pgsql:host=localhost;port=5432;dbname=ead_php_alura_pdo;user=postgres;password=123456");

$statement = $pdo->query('SELECT * FROM students;');
$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);

$studentList = [];

//while ($studentData = $statement->fetch(PDO::FETCH_ASSOC)) {
//    $student = new Student(
//        $studentData['id'],
//        $studentData['name'],
//        new \DateTimeImmutable($studentData['birth_date'])
//    );
//
//    echo $student->age() . PHP_EOL;
//}
//exit();

foreach ($studentDataList as $studentData) {
    $studentList[] = new Student(
        $studentData['id'],
        $studentData['name'],
        new \DateTimeImmutable($studentData['birth_date'])
    );
}

var_dump($studentList);
