<?php
/* criar o banco de dados 
 CREATE DATABASE IF NOT EXISTS kgagames;
criar a tabela

 USE kgagames; 
 CREATE TABLE IF NOT EXISTS clientes (
    email VARCHAR(80) PRIMARY KEY, 
    username VARCHAR(64) NOT NULL,
    nome VARCHAR(80) NOT NULL,
    telefone VARCHAR(15),
    senha VARCHAR(128),
    endereco VARCHAR(80), 
    cidade VARCHAR(30), 
    estado VARCHAR(40), 
    cep VARCHAR(09)
    );
    */

try {
    //  PDO = classe PHP Data Objects 
    $conectar = new PDO("mysql:host=localhost;port=3306;dataname=pdo","root","");
    //                                                 banco          usuario e senha
    //echo("Conectado com sucesso!");
} catch (PDOException $e) {
    echo("Falha ao se conectar".$e->getMessage());
}
?>
