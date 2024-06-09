<?php 
 include_once "conexao.php";
if (!empty($_POST['femail'])) 
  	{ 
        $email = $_POST['femail'];
        $nome = strtoupper($_POST['fnome']);
        $username = $_POST['fusername'];
        $telefone = $_POST['ftelefone'];
  	    if ($email != null) {
			$sql = "UPDATE kgagames.clientes SET 
            nome ='$nome',
            username ='$username',
            endereco = '$telefone'
            WHERE email = '$email'"; 
        }
        if (mysqli_query($conectar, $sql)) {
            echo('<script> alert("Cliente atualizado com sucesso!"); window.location.href="consulta.html";</script>');}
        else 
            {echo('<script> alert("Falha na execução!"); window.location.href="consulta.html";</script>');}	
    }
else 
    {  
        echo('<script> alert("Dados incompletos! Favor preencher todos os campos!"); window.location.href="consulta.html";</script>');
    }
