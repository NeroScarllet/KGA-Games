<?php
include_once "conexao.php";
try {
    $email = $_POST['lfEmail'];
    $senha = $_POST['lfSenha'];

    $sql = "SELECT * FROM kgagames.clientes WHERE email='$email' AND senha='$senha'";
    $result= mysqli_query($conectar, $sql);

    if (mysqli_num_rows($result) > 0)    
        {
        echo('<script>alert("Login efetuado com sucesso!"); window.location.href="jogos.php";</script>');     
        }    
    else
    {
        echo $email;
        echo
         "<script>
            alert('Dados inválidos!');
          </script>";        
    }
 } catch (PDOException $e) {
     echo ("Erro: ". $e->getMessage());
 }