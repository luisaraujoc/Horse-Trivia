<?php 
include 'sys/conx.php';
include 'sys/dll.php';
?>
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
            <canvas class="cavalo__test">
            </canvas>
            <!-- canvas teste -->
            <div class="">
                <div class="pergunta nes-balloon from-left">
                <?php 
                    $i = 0;
                    $p = selec_perg($server, $user, $password, $db);
                    $opc = selec_opc($server, $user, $password, $db);
                    echo "<p>".$p['Pergunta'][$i]."</p>";
                ?>               
                </div>
                <div class="resposta nes-ballon from-right">
                
                </div>
            </div>
            <div class="barreira"></div>
            <!-- Barreira -->
            
            <form action="" method="post">
                <input type="submit" class="btn nes-btn is-primary" name="btn_start" value="Começar">
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



    <!-- Scripts -->
    <script src="https://code.jquery.com/query-3.5.0.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
