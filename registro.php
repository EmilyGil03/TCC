<?php
  session_start();
  include 'conexao.php';

  if ($_POST) {
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $senha = md5($_POST["pass"]);
    $senhaConfirma = md5($_POST["re_pass"]);
  
  $sql = "SELECT * FROM usuarios WHERE login LIKE '$login'";
  $resultado = mysqli_query($conexao, $sql);

  if (mysqli_num_rows($resultado)>0) {
    echo "<script>alert('Login já existe. Tente outro!)</script>";
  }
  else if ($senha == $senhaConfirma) {
    $sql = "INSERT INTO usuarios VALUES (NULL, '$nome', '$email', '$senha')";
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

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Registre-se</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Seu nome"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Seu Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Senha"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Confirme sua Senha"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Registrar"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">Já possuo um cadastro</a>
                    </div>
                </div>
            </div>
        </section>
        <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>