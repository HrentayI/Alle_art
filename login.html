<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap+Condensed:ital,wght@1,700&family=Nunito:wght@700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>Login</title>
    
</head>

<body>
<section id="login-container">
    <img src="imagens/logo.png" alt="alleart-logo">
    <h2>Faça Login</h2>
<form action="" method="POST">
    <label>Email</label>
    <input type="text" name="email" placeholder="Digite seu email">
    <label>Senha</label>
    <input type="password" name="senha" placeholder="Digite sua senha"><br>
    <?php
    include('conexao.php');

    if (isset($_POST['email'])) {

        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

        if (!empty($senha) && !empty($email)) {

            try {
                $sql_code = $mysqli->query("SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}'");

                if ($sql_code->num_rows > 0) {
                    session_start();
                    $usuario = $sql_code->fetch_assoc();
                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['nome'] = $usuario['nome'];
                    header("Location: painel.php");
                } else { ?>
                    <span class=text> Falha ao logar! E-mail ou senha incorretos</span> <?php
                }
            }catch(\Exception $e){
                echo $e->getMessage();
            }
        }
    }
    ?>
    <p>Não é cadastrado? <a href="cadastro.php">Cadastre-se</a></p>
    <button>Entrar</button>
</form>
</section>
</body>


</html>
