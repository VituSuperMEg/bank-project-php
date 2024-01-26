<?php

namespace Root\BankProject\Services;

use PDO;
use PDOException;

class Connection
{
    private $pdo;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        try {
            $host = 'localhost';
            $dbname = 'bank';
            $user = 'postgres';
            $password = '3640';

            $this->pdo = new PDO("pgsql:host={$host};dbname={$dbname}", $user, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new \Exception('Erro de conexão com o banco de dados: ' . $e->getMessage());
        }
    }

    public function query($sql, $params = [])
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            throw new \Exception('Erro ao executar a consulta: ' . $e->getMessage());
        }
    }
}
