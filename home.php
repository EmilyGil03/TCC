<!DOCTYPE html>
<!-- saved from url=(0064)index.html -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
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

<?php
  include ("navbar.php");
?>

<!-------------------------CAROUSEL-------------------------------->
<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
      
      <div class="carousel-item active" style="background-color: black;">
        <svg class="bd-placeholder-img" width="100%" height="100%" role="img"></svg><img src="img/slide1.jpg" style="opacity: 0.5"><rect width="100%" height="100%" fill="#777">      
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Raciocinio lógico no mercado de trabalho...</h1>
            <p>Por que é importante desenvolver o raciocínio lógico dentre outras habilidades específicas e em que situações elas ajudam no mercado de trabalho?</p>
            <p><a class="btn btn-lg btn-primary" href="home.php" role="button">Saiba mais</a></p>
          </div>
        </div>
      </rect></div>

      <div class="carousel-item" style="background-color: black;">
        <svg class="bd-placeholder-img" width="100%" height="100%" role="img"></svg><img src="img/slide2.jpg" style="opacity: 0.5"><rect width="100%" height="100%" fill="#777">
        <div class="container">
          <div class="carousel-caption">
            <h1>Destaque seu curriculo!</h1>
            <p>Realizando testes de raciocínio lógico, empresas podem visualizar seu perfil e filtrarem candidatos qualificados para suas respectivas vagas...</p>
            <p><a class="btn btn-lg btn-primary" href="home.php" role="button">Saiba mais</a></p>
          </div>
        </div>
      </rect></div>
      <div class="carousel-item"  style="background-color: black;">
        <svg class="bd-placeholder-img" width="100%" height="100%" role="img"></svg><img src="img/slide3.jpg" style="opacity: 0.5"><rect width="100%" height="100%" fill="#777">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Melhore seu desempenho.</h1>
            <p>Disponibilizamos dicas e atividades que podem te ajudar na resolução dos exercícios, assim como melhorar seu desempenho profissional dentro do seu ambiente de trabalho.</p>
            <p><a class="btn btn-lg btn-primary" href="home.php" role="button">Saiba mais</a></p>
          </div>
        </div>
      </rect></div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!--------------------fim do Carrossel-------------------------------->

  <div class="container marketing">

    <div class="row">
      <div class="col-lg-4">   
        <img src="img/iconAtividades.png">
        <h2>Atividades</h2>
        <p>Resolva atividades que envolvem raciocinio lógico para desenvolve-lo e assim melhorar o desempenho de tarefas...</p>
        <p><a class="btn btn-secondary" href="index.html" role="button">Visualizar »</a></p>
      </rect></div>
      
      <div class="col-lg-4">
        <img src="img/iconDica.png">
        <h2>Dicas</h2>
        <p>Algumas dicas que podem auxilia-lo na hora de melhorar algumas das habilidades que estão sendo cada vez mais exigidas em um profissional...</p>
        <p><a class="btn btn-secondary" href="index.html" role="button">Visualizar »</a></p>
      </div>
      
      <div class="col-lg-4">
        <img src="img/iconTeste.png">
        <h2>Testes</h2>
        <p>Cada vez mais empresas realizam testes de raciocínio lógico com seus funcionários principalmente para seleciona-los em uma entrevista...</p>
        <p><a class="btn btn-secondary" href="testes.php" role="button">Visualizar »</a></p>
      </div>
    </div>


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <img src="img/entrevista.jpg">
        <!--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" preserveAspectRatio="xMidYMid slice"><rect width="100%" height="100%" fill="#eee"></rect></svg>-->
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