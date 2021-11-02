<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINKs -->
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <link rel="stylesheet" href="./node_modules/nes.css/css/nes.min.css">
    <!-- <link rel="stylesheet" href="node_modules/nes.css/css/nes.css"> -->
    <link rel="stylesheet" href="css/style.css">

    <title>Horse Trivia</title>
</head>

<body>
    <header>
        <div class="menu-bg">
            <div class="menu">
                <div class="menu__logo">
                    <a href="#">
                        <img src="" alt="">
                    </a>
                </div>
                <!-- .menu__logo -->
                <nav class="nav">
                    <ul class="nav__list">
                        <li><a href="" class="nav__link">Como jogar</a></li>
                        <li><a href="" class="nav__link">Ainda não sei</a></li>
                    </ul>
                    <!-- nav itens -->
                </nav>
                <!-- nav -->
            </div>
            <!-- .menu -->
        </div>
        <!-- -menu-bg -->
    </header>
    <!-- Header -->


    <!-- Content and Canva -->
    <section class="game__sect">
        <div class="game__screen">
            <canvas class="cavalo__test"></canvas>
            <!-- canvas teste -->
            <div class="barreira">
            </div>
            <!-- Barreira -->
            <form action="functions.php" method="post">
                <input type="submit" class="btn nes-btn is-primary" value="Começar">
            </form>
        </div>
        <!-- Game Screen -->
    </section>
    <!-- Game Sect -->

    <!-- Footer -->
    <footer class="footer ">
        <div class="footer__c ">
            <p class="footer__copyright ">Todos os direitos reservados(c) Stack Insiders</p>
            <p class="footer__ender ">Av. David Jonas Fadini, s/n - Rosa Neto,<br>Eunápolis - BA, 45823-725</p>
            <p class="footer__indentify ">Esse é um projeto integrador da equipe Stack Insiders para as matérias tecnicas do terceiro ano do curso técnico integrado em informatica do IFBA Campus Eunápolis.</p>
        </div>
        <div class="footer-logo ">
            <a href="index.html ">
                <img src="http://insidersteam.com.br/wp-content/uploads/2021/09/INSIDERS-800-300x300.png " alt="Stack Insiders " class="footer__logo ">
            </a>
            <a href="https://portal.ifba.edu.br/eunapolis ">
                <img src="https://portal.ifba.edu.br/dgcom/documentos-e-manuais-arquivos/manuais/ifba_marca_vertical-01.png/@@download/file/IFBA_MARCA_vertical-01.png " alt="IFBA-Logo " class="footer__logo ">
            </a>
        </div>
    </footer>
    <script src="js/move.js"></script>
</body>

</html>

<!-- <p class="nes-balloon from-left nes-pointer">
  This is not a clickable element, but it's an area of the pointer.
</p> -->