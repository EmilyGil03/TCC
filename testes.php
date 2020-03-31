<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Página inicial</title>

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
  </head>

  <body>
     <?php
      include ("navbar.php");
    ?>

<section style="margin-top: 5%; margin-left: 2%;">
  <h1>Testes prontos...</h1>

    <div class="container">
    <div class="row">

  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/teste.png" style="width: 300px; height: 300px;">
  <div class="card-body">
    <h5 class="card-title">Teste 1</h5>
    <p class="card-text">Descrição: <br> Enviado por Empresa X <br> nº de questões: 10.</p>
    <p><a class="btn btn-secondary" href="teste1.php" role="button">Realizar &raquo;</a></p>
  </div>
</div>
</div>
</div>

</section>

   <?php
    include ("footer.php");
    ?>
</body>

</html>