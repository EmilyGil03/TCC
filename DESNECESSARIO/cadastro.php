<?php
  session_start();
  include 'conexao.php';

  if ($_POST) {
    $nome = $_POST["nome"];
    $login = $_POST["login"];
    $email = $_POST["email"];
    $nascimento = $_POST["nascimento"];
    $senha = md5($_POST["senha"]);
    $senhaConfirma = md5($_POST["senhaConfirma"]);
  
  $sql = "SELECT * FROM usuarios WHERE login LIKE '$login'";
  $resultado = mysqli_query($conexao, $sql);

  if (mysqli_num_rows($resultado)>0) {
    echo "<script>alert('Login já existe. Tente outro!)</script>";
  }
  else if ($senha == $senhaConfirma) {
    $sql = "INSERT INTO usuarios VALUES (NULL, '$nome', '$nascimento', '$email', '$login', '$senha')";
    if (mysqli_query($conexao, $sql)) {
      echo "<script>alert('Cadastro realizado com sucesso!');
      window.location.href = 'login.php';
      </script>";
    }else{
      echo"<script>alert('Falha no cadastro!')</script>";
    }
  }
  }
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

<link href="css/bootstrapCad.min.css" rel="stylesheet">


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
    <link href="css/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Cadastro</h2>
    <p class="lead">Preencha as informações abaixo para realizar seu cadastro!</p>
  </div>

    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Dados cadastrais:</h4>

      <form action="" method="post" class="needs-validation" novalidate>
        
          <div class="mb-3">
            <label for="nome">Nome completo:</label><span class="text-muted">*</span>
            <input type="text" class="form-control" id="nome" placeholder="" value="" name="nome" required>
            <div class="invalid-feedback">
              *Campo obrigatório.
            </div>
          </div>

        <div class="mb-3">
          <label>Nome de usuario:</label><span class="text-muted">*</span>
          <div class="input-group">
            <div class="input-group-prepend">
            </div>
            <input type="text" class="form-control" id="login" placeholder="EX: jaozinho123" name="login" required>
            <div class="invalid-feedback" style="width: 100%;">
              *Campo obrigatório.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label>Email:<span class="text-muted">*</span></label>
          <input type="email" class="form-control" id="email" placeholder="voce@exemplo.com" name="email">
          <div class="invalid-feedback">
           Por favor, insira um email válido.
          </div>
        </div>

        <div class="mb-3">
          <label>Data de nascimento:<span class="text-muted">*</span></label>
          <input type="date" class="form-control" id="nascimento" placeholder="DD/MM/AAAA" name="nascimento">           
        </div>
        
        <div class="mb-3">
          <label>Senha:<span class="text-muted">*</span></label>
          <input type="password" class="form-control" id="senha" name="senha">           
        </div>
        <div class="mb-3">
          <label>Confirmar senha:<span class="text-muted">*</span></label>
          <input type="password" class="form-control" id="senhaConfirma" name="senhaConfirma">
        </div>

        <p>Campos obrigatórios *</p>
      <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address" name="termos" required>
          <label class="custom-control-label" for="same-address" required>Eu li e aceito os termos de uso.</label>
        </div>
        </div>
        
        <hr class="mb-4">
        <input class="btn btn-primary btn-lg btn-block" type="submit" name="cadastrar" value="Cadastrar">
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Jean Carllos e Emily - Técnico em Desenvolvimento de Sistemas</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidade</a></li>
      <li class="list-inline-item"><a href="#">Termos</a></li>
      <li class="list-inline-item"><a href="#">Suporte</a></li>
    </ul>
  </footer>
</div>
<script src="js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"></script>')</script><script src="js/bootstrapCad.bundle.min.js"></script>
        <script src="form-validation.js"></script></body>
</html>
