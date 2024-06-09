<?php 
  include_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

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

<body class="bg-body-tertiary" id="bg">
  <!--Início do Navbar-->
  <nav class="navbar navbar-expand-lg" style="font-size: large;">
    <div class="container-fluid">
      <nav class="navbar">
        <a class="navbar-brand" href="./jogos.php">
          KGA Games
          <img src="./Assets/images/crown.png" width="40" height="40" alt="ícone de coroa">
        </a>
      </nav>
      <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="jogos.php">Jogos</a>
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
            <a class="nav-link" href="./login.html">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./consulta.html">Consultar cliente</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Fim do Navbar-->
  <!--Início carousel-->
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2500">
        <img src="./Assets/images/Halo_Banner.jpg" class="d-block w-100" alt="Halo banner">
        <div class="carousel-caption d-none d-md-block">
          <h5>Clássicos</h5>
          <p>Mantemos o espírito nostálgico</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2500">
        <img src="./Assets/images/Subnautica_banner.jpg" class="d-block w-100" alt="Zelda banner">
        <div class="carousel-caption d-none d-md-block">
          <h5>Explore novos mundos</h5>
          <p>Descubra todos os mistérios</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./Assets/images/GOW_Banner.jpg" class="d-block w-100" alt="God of War banner">
        <div class="carousel-caption d-none d-md-block">
          <h5>Derrote criaturas mitológicas</h5>
          <p>Prevaleça sobre seus inimigos</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--Álbum de jogos-->
  <div class="album py-5 ">
    <h1 style="text-align: center; font-weight: 800;">Jogos mais vendidos</h1>
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="./Assets/images/minecraft.jpg">
            </img>
            <div class="card-body">
              <h5 class="card-title">Minecraft Playstation 4 Edition</h5>
              <p class="card-text"><s>R$129,00 </s><strong style="color: gold;">R$100,00</strong><br><strong
                  style="font-size: larger;">5x</strong>
                de <strong style="font-size: larger;">R$19,99</strong> sem juros</p>
              <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button"
                  style="font-weight: bold; background-color: black; color:gold;">COMPRAR</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="card-img-top" width="100%" height="100%" src="./Assets/images/DMC5.jpg" style="height: 100%;">
            </img>
            <div class="card-body">
              <h5 class="card-title">Devil May Cry 5</h5>
              <p class="card-text"><s>R$169,50 </s><strong style="color: gold;">R$67,80</strong><br><strong
                  style="font-size: larger;">3x</strong>
                de <strong style="font-size: larger;">R$22,99</strong> sem juros</p>
              <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button"
                  style="font-weight: bold; background-color: black; color:gold;">COMPRAR</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="./Assets/images/GTAV.jpg">
            </img>
            <div class="card-body">
              <h5 class="card-title">Grand Theft Auto 5</h5>
              <p class="card-text"><s>R$159,90 </s><strong style="color: gold;">R$79,95</strong><br><strong
                  style="font-size: larger;">4x</strong>
                de <strong style="font-size: larger;">R$19,99</strong> sem juros</p>
              <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button"
                  style="font-weight: bold; background-color: black; color:gold;">COMPRAR</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Paginação-->
  <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
      <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
    </ul>
  </nav>
  
  <!--JS do Bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>