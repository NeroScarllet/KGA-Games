<?php include_once "conexao.php"; ?>
<!DOCTYPE html>

<body>
    <?php
    $email = $_GET['email'];
    $sql = "DELETE FROM clientes WHERE email='$email'";

    mysqli_query($conectar, $sql);

    echo ("<script>alert('Cliente excluído com sucesso!');
		window.location.href='consulta.html'; </script>");
    ?>

</body>

</html>