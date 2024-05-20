<?php
include_once "conexao.php";

try {
    //variáveis que vão receber os conteúdos do fomrulário html

    $nome = $_POST['cfNome'];
    $username = $_POST['cfUsername'];
    $email = $_POST['cfEmail'];
    $telefone = $_POST['cfTelefone'];
    $senha = $_POST['cfSenha'];
    /*isso serve somente para verificar se o conteúdo chegou corretamente.
    echo "<br>".$nome;
    echo "<br>".$username;
    echo "<br>".$email;
    echo "<br>".$telefone;*/

    //variável $conectar vem do arquivo conexao.php

    //Tratando as informações recebidas do formulário
    $nome = strtoupper($nome);

    $sql = $conectar->prepare("INSERT INTO kgagames.clientes (nome, username, email, telefone, senha) VALUES ('$nome', '$username', '$email', '$telefone', '$senha')");

    $sql->execute();
    header("location: index.html");
} catch (PDOException $e) {
    echo ("Erro: " . $e->getMessage());
}

?>