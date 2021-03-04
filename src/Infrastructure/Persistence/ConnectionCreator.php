<?php

namespace Alura\Pdo\Infrastructure\Persistence;

use PDO;

class ConnectionCreator
{
    public function createConnection(): PDO
    {
        $pdo = new PDO("pgsql:host=localhost;port=5432;dbname=ead_php_alura_pdo;user=postgres;password=123456");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}
