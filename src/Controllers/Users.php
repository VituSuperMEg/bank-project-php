<?php

namespace Root\BankProject\Controllers;

use Ramsey\Uuid\Uuid;
use Root\BankProject\Services\Connection; // Certifique-se de importar a classe Connection

class Users extends Controller
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Connection(); 
    }

    public function index()
    {
        try {
            $result = $this->connection->query('SELECT * FROM users');

            foreach ($result as $row) {
                print_r($row);
            }
        } catch (\Exception $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }

    public function store()
    {
        try {
            $uuid = Uuid::uuid4();

            $name = 'root';
            $email = 'root@gmail.com';
            $cpf = '0000000000';
            $password = '123';

            $this->connection->query(
                "INSERT INTO users (id, name, email, cpf, password) VALUES (?, ?, ?, ?, ?)",
                [$uuid, $name, $email, $cpf, $password]
            );
        } catch (\Exception $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }
}
