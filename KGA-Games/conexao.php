<?php
/* criar o banco de dados 
 CREATE DATABASE IF NOT EXISTS kgagames;
criar a tabela

 USE kgagames; 
 CREATE TABLE IF NOT EXISTS clientes (
    email VARCHAR(256) PRIMARY KEY, 
    username VARCHAR(64) NOT NULL,
    nome VARCHAR(80) NOT NULL,
    telefone VARCHAR(15),
    senha VARCHAR(128) NOT NULL,
    endereco VARCHAR(80), 
    cidade VARCHAR(30), 
    estado VARCHAR(40), 
    cep VARCHAR(09)
    );
    */
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'kgagames');
    
    $conectar = new mysqli(HOST, USER, PASS, BASE);
?>
