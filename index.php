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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap+Condensed:ital,wght@1,700&family=Nunito:wght@700&display=swap" rel="stylesheet">
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

        <div name="status">
            <a href="login.php" class="botao">Login</a>
        </div>
        
    </nav>
    <header id="topo">
        <img src="imagens/logo-centro.png" alt="alleart">
        <h2>Onde a arte, a fotografia, o vídeo e a tecnologia se encontram!</h2>
        <a href="#" class="botao">Ver Mais</a>
    </header>

    <!--Seção quem somos-->

    <section id="quem-somos">
        <h2>Quem Somos</h2>
        <p>Somos um estúdio preparado e equipado para receber os profissionais da fotografia, vídeo, audiovisual, produtoras, agências publicitárias, influencers e geradores de conteúdo.</p>
        <p>Trabalhamos com profissionais credenciados e preparados para produzir suas campanhas fotográficas e de audiovisual.</p>
        <p>No estúdio você encontra uma loja para locação de mobílias, objetos de cena, figurinos de época e contemporâneo.</p>
        <p>O estúdio Alleart, está localizado em Alphaville, um bairro nobre dos municípios de Barueri e Santana de Parnaíba, no estado de São Paulo.</p>
        <a href="index.php/#contato" class="botao">Fale Conosco!</a>
    </section>

    <!--Área da seção Serviços-->

    <section id="servicos">
        <h2>Serviços</h2>
        <div>
            <img src="imagens/p1.png" alt="camera">
            <h3>Fotografia</h3>
            <p>Guarde momentos importantes, como casamento, formaturas, aniversários para sempre com alta qualidade.</p>
        </div>
        <div>
            <img src="imagens/p2.png" alt="filme">
            <h3>Edição de Vídeo</h3>
            <p>Quer transformar alguma lembrança em vídeo ou algo emocionante com trilha sonora, textos e cores fantásticas?</p>
        </div>
        <div>
            <img src="imagens/p3.png" alt="videoplayer">
            <h3>Captação de Imagem</h3>
            <p>Vai participar de algum evento importante em sua vida, então é importante recordar tudo a cada segundo para tornar tudo imortal!</p>
        </div>
        <div>
            <img src="imagens/p4.png" alt="tratamento">
            <h3>Tratamento de Imagem</h3>
            <p>Tem alguma foto antiga com cores meio tristes? E uma foto sua com uma pele nova e um sorriso brilhante?</p>
        </div>
    </section>

    <!--Área da Seção Portifólio-->

    <section id="portifolio">
        <h2>Portifólio</h2>
        <img src="imagens/aniversario.jpg" alt="aniversario">
        <img src="imagens/baby.jpg" alt="baby">
        <img src="imagens/casamento.jpg" alt="casamento">
        <img src="imagens/garota.jpg" alt="garota">
        <img src="imagens/homem.jpg" alt="homem">
        <img src="imagens/formando.jpg" alt="formando">
    </section>

    <!--Área da seção Contato-->

    <section id="contato">
        <h2>Contato</h2>
        <p>Fale conosco!</p>
        <div>
            <img src="imagens/tel.png" alt="telefone">
            <p><a href="tel:11912345678">(11) 9 1234-5678</a></p>
        </div>
        <div>
            <img src="imagens/mail.png" alt="email">
            <p><a href="mailto:contato@alleart.com.br">contato@alleart.com.br</a></p>
        </div>
    </section>

    <!--Rodapé-->

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
