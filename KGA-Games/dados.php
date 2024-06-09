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
                <div class="p-4 p-md-5 border rounded-3 border-color" action="" method="post">
                    <h1 class="text-center">Dados encontrados</h1>
                    <br>
                    <?php
                    include_once "conexao.php";
                    if (isset($_POST["consultar"])) {
                        try {
                            $email = $_POST["conEmail"];

                            $consulta = "SELECT * FROM kgagames.clientes WHERE email = '$email'";
                            $result = mysqli_query($conectar, $consulta);

                            if (mysqli_num_rows($result) > 0) {
                                while ($linha = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <strong>Email</strong>
                                    <div class="form-control">
                                        <?php echo ($linha['email']); ?>
                                    </div>
                                    <br>
                                    <strong>Nome</strong>
                                    <div class="form-control">
                                        <?php echo ($linha['nome']); ?>
                                    </div>
                                    <br>
                                    <strong>Nome de usuário</strong>
                                    <div class="form-control">
                                        <?php echo ($linha['username']); ?>
                                    </div>
                                    <br>
                                    <strong>Telefone</strong>
                                    <div class="form-control">
                                        <?php echo ($linha['telefone']); ?>
                                    </div>
                                    <br>
                                    <div style="text-align: center">
                                        <button class="btn btn-primary" style="background-color: black; font-weight: bold;">
                                            <a style="color: gold" href="editar.php?email=<?php echo ($linha['email']); ?>">Alterar</a>
                                        </button>
                                        <button class="btn btn-primary" style="background-color: black; font-weight: bold;">
                                            <a style="color: gold" href="excluir.php?email=<?php echo ($linha['email']); ?>">Excluir</a>
                                        </button>
                                    </div>
                                    <?php
                                }
                            } else {
                                echo $email;
                                echo '<script>alert("Usuário não cadastrado!");window.location.href="consulta.html";</script>';
                            }
                        } catch (PDOException $e) {
                            echo ("Erro: " . $e->getMessage());
                        }
                    }
                    ?>
                </div>
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