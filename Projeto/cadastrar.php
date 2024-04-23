<?php
include_once "conexao.php";

try {
    //variáveis que vão receber os conteúdos do fomrulário html

    $nome = $_POST['nome'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    /*isso serve somente para verificar se o conteúdo chegou corretamente.
    echo "<br>".$nome;
    echo "<br>".$username;
    echo "<br>".$email;
    echo "<br>".$telefone;*/

    //variável $conectar vem do arquivo conexao.php

    $sql = $conectar->prepare("INSERT INTO pdo.clientes (email, endereco, cidade, estado, cep) VALUES ('$email', '$endereco', '$cidade', '$estado', '$cep')");

    $sql->execute();
    header("location: index.html");
} catch (PDOException $e) {
    echo ("Erro: " . $e->getMessage());
}

?>