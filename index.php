<!DOCTYPE html>
<!-- saved from url=(0064)index.html -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Página inicial</title>

    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> <!--Icone da página-->

<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>

<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
  <img src="img/logo.svg" style="width: 150px; height: 48px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="loginEmpresa.php">Empresas<span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Candidatos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Info</a>
      </li>
    </ul>
  </div>
</nav>
</header>

  <div class="container marketing">

    <div class="row" style="margin-top: 5%;">
      <div class="col-lg-2">
      </div>
      <div class="col-lg-4">   
        <img src="img/iconEmpresa.png">
        <h2>Empresas</h2>
        <p>Se você é representante de alguma empresa, realize seu login ou cadastre-se como pessoa jurídica</p>
        <p><a class="btn btn-secondary" href="#" role="button">Login »</a></p>
        <p><a class="btn btn-secondary" href="#" role="button">Cadastro »</a></p>
      </div>
           
      <div class="col-lg-4">
        <img src="img/iconPessoa.png">
        <h2>Candidatos</h2>
        <p>Para realizar testes de raciocinio lógico, se candidatar em vagas das empresas cadastradas e melhorar seu perfil profissional, realize seu login ou cadastre-se como pessoa física</p>
        <p><a class="btn btn-secondary" href="login.php" role="button">Login »</a></p>
        <p><a class="btn btn-secondary" href="registro.php" role="button">Cadastro »</a></p>
      </div>
      <div class="col-lg-2">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Leia algumas dicas para melhorar seu raciocínio lógico.</h2>
        <p class="lead">Separamos algumas dicas que podem te auxiliar em atividades coditianas em seu ambiente de trabalho melhorando sua capacidade de raciocínio lógico.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Saiba mais »</a></p>
      </div>
      <div class="col-md-5">
          <img src="img/iconDica.png">
      </div>
    </div>

    <hr class="featurette-divider">
  </div>

  <?php
    include ("footer.php");
    ?>
    
</main>
</body>
</html>