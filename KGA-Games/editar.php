<?php   
    include_once "conexao.php";
	$email=$_GET["email"];
		
	$sql = "SELECT * FROM kgagames.clientes WHERE email='$email'";
	$listar = mysqli_query($conectar,$sql);
	$campo = mysqli_fetch_array($listar); ?>
<!DOCTYPE html>
<body>
	<main>
	<h2>Editando cliente</h2>
	<form method="post" action="atualiza_cliente.php">
		<p><label>Email:</label>
			<input type="text" name="femail" onblur="validaEmail()" value="<?php echo($email); ?>" ><br>
		</p>
		<p><label>Nome:</label>
			<input type="text" name="fnome" maxlength="80" size="50" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g, '')" required value="<?php echo($campo['nome']); ?>"></p>
            <p><label>Username:</label>
			<input type="text" name="fusername" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9]/g, '')" required value="<?php echo($campo['username']); ?>"></p>

            <p><label>Telefone:</label>
			<input type="text" name="ftelefone" pattern="\(\d{2}\)[0-9]{4,5}-[0-9]{4}" required value="<?php echo($campo['telefone']); ?>"></p>

        <br><br>
		<p><input type="submit" value="Atualizar">
		   <input type="reset" value="Redefinir">
        </p>
	</form>
</main>
</body>
</html>