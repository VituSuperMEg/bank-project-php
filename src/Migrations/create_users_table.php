<?php

$host = 'localhost';
$dbname = 'bank';
$user = 'postgres';
$password = '3640';

$pdo = new PDO("pgsql:host={$host};dbname=postgres", $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Criar banco de dados se não existir
$createDatabaseSql = "CREATE DATABASE bank";
$pdo->exec($createDatabaseSql);

// Conectar ao banco de dados especificado
$pdo = new PDO("pgsql:host={$host};dbname={$dbname}", $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Criar tabela de usuários
$createTableSql = "
CREATE TABLE users (
    id varchar(255) PRIMARY KEY,
    name VARCHAR(255) not null,
    email VARCHAR(255) not null,
    cpf char(11) unique NOT NULL
);
";

$pdo->exec($createTableSql);

echo "Banco de dados e tabela de usuários criados com sucesso.\n";
