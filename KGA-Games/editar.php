<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./Assets/css/style.css">
	<link rel="shortcut icon" href="./Assets/images/crown.png" type="image/x-icon">
	<!--CSS do Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<title>KGA Games</title>
</head>

<body class="bg3"
	style="background-image: url(./Assets/images/Cyberpunk-banner.png); width: 100%; height: 100%; background-size: cover; background-repeat: no-repeat;">
	<!--Navbar-->
	<nav class="navbar navbar-expand-lg" style="font-size: large;">
		<div class="container-fluid">
			<nav class="navbar">
				<a class="navbar-brand" href="./jogos.php">
					KGA Games
					<img src="./Assets/images/crown.png" width="40" height="40" alt="ícone de coroa">
				</a>
			</nav>
			<button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="jogos.php">Jogos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./quem-somos.html">Quem somos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="onde-estamos.html">Onde estamos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./cadastre.html">Cadastre-se</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="./login.html">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="./consulta.html">Consultar cliente</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--Login-->
	<div class="container form-container2" style="margin-top: 3%;">
		<div class="row align-items-center">
			<div class="col-md-10 mx-auto col-lg-5">
				<?php
				include_once "conexao.php";
				$email = $_GET["email"];

				$sql = "SELECT * FROM kgagames.clientes WHERE email='$email'";
				$listar = mysqli_query($conectar, $sql);
				$campo = mysqli_fetch_array($listar); ?>

				<form class="p-4 p-md-5 border rounded-3 border-color" method="post" action="atualiza_cliente.php">
					<h1 class="text-center">Alterar dados</h1>
					<br>
					<div class="form-floating mb-3">
						<input name="femail" type="text" class="form-control" maxlength="256" onblur="validaEmail()"
							placeholder="Email" value="<?php echo ($campo['email']); ?>" required />
						<label>Email</label>
					</div>
					<div class="form-floating mb-3">
						<input name="fnome" type="text" class="form-control" maxlength="80" placeholder="Nome"
							onkeyup="this.value=this.value.replace(/[^a-zA-Z ]/g, '')"
							value="<?php echo ($campo['nome']); ?>" required />
						<label>Nome</label>
					</div>
					<div class="form-floating mb-3">
						<input name="fusername" type="text" class="form-control" maxlength="80" placeholder="Username"
							value="<?php echo ($campo['username']); ?>" required />
						<label>Nome de usuário</label>
					</div>
					<div class="form-floating mb-3">
						<input name="ftelefone" type="text" class="form-control" placeholder="Telefone"
							pattern="\(\d{2}\)[0-9]{4,5}-[0-9]{4}" value="<?php echo ($campo['telefone']); ?>"
							required />
						<label>Telefone</label>
					</div>
					<br>
					<div style="text-align: center">
						<button class="btn btn-primary" style="color: gold; background-color: black; font-weight: bold;"
							type="submit">Atualizar</button>
						<button class="btn btn-primary" style="color: gold; background-color: black; font-weight: bold;"
							type="reset">Redefinir</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>

	<!--JS do Bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>

</body>

</html>