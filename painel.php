<?php
include('conexao.php');
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alleart Studio</title>
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/painel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap+Condensed:ital,wght@1,700&family=Nunito:wght@700&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <?php
    include('conexao.php');
    ?>
    <!-- Área do menu principal e cabeçalho-->
    <nav id="menu">
        <a href="#"><img src="imagens/logo.png" alt="alleart-logo"></a>
        <div class="menu-principal">
            <ul>
                <li><a class="principal" href="index.php#quem-somos">Quem Somos</a></li>
                <li><a class="principal" href="index.php#servicos">Serviços</a></li>
                <li><a class="principal" href="index.php#portifolio">Portifólio</a></li>
                <li><a class="principal" href="index.php#contato">Contato</a></li>
            </ul>
        </div>
    </nav>
    <header id="topo">
        <img src="imagens/logo-centro.png" alt="alleart">
        <h2>Onde a arte, a fotografia, o vídeo e a tecnologia se encontram!</h2>
    </header>
    <section id="painel">
        <h2>Painel de Controle</h2>
        <p>Bem-vindo(a) ao painel, <?php echo $_SESSION['nome'] ?>!</p>
        <a href="logout.php"><ion-icon name="log-out-outline"></ion-icon></br>Sair</a>
    </section>
    <footer>
        <a href="index.php#menu"><img src="imagens/voltar.png" alt="voltar"></a>
        <div class="redes-sociais">
            <ul>
                <li><a href="#"><img src="imagens/instagram.png" alt="instagram"></a></li>
                <li><a href="#"><img src="imagens/face.png" alt="facebook"></a></li>
                <li><a href="#"><img src="imagens/tw.png" alt="twitter"></a></li>
                <li><a href="#"><img src="imagens/linkedin.png" alt="linkedin"></a></li>
            </ul>
        </div>
        <p>Todos os direitos reservados &copy; Alleart Studio</p>
    </footer>
</body>
</html>