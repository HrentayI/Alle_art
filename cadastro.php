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
    <title>Cadastro</title>
    
</head>

<body>
<section id="login-container">
    <img src="imagens/logo.png" alt="alleart-logo">
    <h2>Cadastre-se</h2>
<form action="" method="POST">
    <label>Nome</label>
    <input type="text" name="nome" placeholder="Digite seu nome">
    <label>Email</label>
    <input type="text" name="email" placeholder="Digite seu email">
    <label>Crie uma senha</label>
    <input type="password" name="senha" placeholder="Digite sua senha">
    <label>Repita sua senha</label>
    <input type="password" name="repetirSenha" placeholder="Repita sua senha">
    <button type="submit" name="submit">Cadastrar</button>
</form>
</section>
</body>
<?php
    include('conexao.php');

    if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $repetirSenha = $_POST['repetirSenha'];

    if ($repetirSenha == $senha){
        $resultado = mysqli_query($mysqli, "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')");
        header('Location: sucesso.php');
    } else {
        echo "As senhas não são iguais";
    }
    }
?>
</html>