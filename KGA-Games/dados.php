<?php
include_once "conexao.php";
try {
    echo "<table border='1' style='border: 1px black solid;border-collapse: collapse;'>
                    <tr>
                        <td>Email</td>
                        <td>Nome</td>
                        <td>Nome de usuário</td>
                        <td>Telefone</td>
                        <td>Ação 1</td>
                        <td>Ação 2</td>
                    </tr>";
    $email = $_POST['conEmail'];

    $consulta = "SELECT * FROM kgagames.clientes WHERE email = '$email'";
    $result = mysqli_query($conectar, $consulta);

    if (mysqli_num_rows($result) > 0) {
        while ($linha = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo($linha['email']); ?></td>
                    <td><?php echo($linha['nome']); ?></td>
                    <td><?php echo($linha['username']); ?></td>
                    <td><?php echo($linha['telefone']); ?></td>
                    <td><a href="editar.php?email=<?php echo($linha['email']); ?>">Alterar</a></td>
                    <td><a href="excluir.php?email=<?php echo($linha['email']); ?>">Excluir</a></td>
                </tr>
                <?php
        }
        echo "</table>";
    } else {
        echo $email;
        echo
            '<script>
            alert("Usuário não cadastrado!");window.location.href="consulta.html";
          </script>';
    }
} catch (PDOException $e) {
    echo ("Erro: " . $e->getMessage());
}