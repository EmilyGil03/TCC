 <?php
    session_start();
    include 'conexao.php';

    if (isset($_POST["name"]) && isset($_POST["pass"])) {
        $name = $_POST["name"];
        $senha = md5($_POST["pass"]); //criptografia de senha

        $sql = "SELECT * FROM usuarios WHERE nome = '$name' AND senha = '$senha'";
        $resultado = mysqli_query($conexao,$sql);

        if(mysqli_num_rows($resultado) == 1){
            $_SESSION["nome"] = $name;
            header("Location:home.php");
        }
        else{
            echo "<script>alert('Login e/ou senha incorretos!')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
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
        <!-- Login -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="registro.php" class="signup-image-link">Crie uma conta</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Entre</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="your_name" placeholder="Seu Nome"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="your_pass" placeholder="Senha"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Entrar"/>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>