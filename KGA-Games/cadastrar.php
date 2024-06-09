<?php
include_once "conexao.php";

try {
    $nome = $_POST['cfNome'];
    $username = $_POST['cfUsername'];
    $email = $_POST['cfEmail'];
    $telefone = $_POST['cfTelefone'];
    $senha = $_POST['cfSenha'];

    $nome = strtoupper($nome);

    $sql = "INSERT INTO kgagames.clientes (nome, username, email, telefone, senha) VALUES ('$nome', '$username', '$email', '$telefone', '$senha')";

    if (mysqli_query($conectar,$sql)) {
    echo('<script>alert("Cadastro efetuado com sucesso!"); window.location.href="jogos.php";</script>');     
    }
} catch (PDOException $e) {
    echo ("Erro: " . $e->getMessage());
}
