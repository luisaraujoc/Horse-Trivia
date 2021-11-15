<?php
include 'sys/conx.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINKs -->
    <link rel="stylesheet" href="./node_modules/nes.css/css/nes.min.css">
    <!-- <link rel="stylesheet" href="node_modules/nes.css/css/nes.css"> -->
    <script src="https://kit.fontawesome.com/e15fd69637.js" crossorigin="anonymous"></script>
    <script src="js/register.js"></script>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <section>
        <div class="container">
            <div class="user signinBx">
                <div class="imgBx">
                    <img src="img/pista.png" alt="" />
                </div>
                <div class="formBx">
                    <form action="" onsubmit="return false;">
                        <h2>Entrar</h2>
                        <input type="text" name="username" placeholder="Nome de Usuário" />
                        <input type="password" name="password" placeholder="Senha" />
                        <input type="submit" name="" value="Entrar" />
                        <p class="signup">
                            Não tem uma conta?
                            <a href="#" onclick="toggleForm();">Crie uma conta.</a>
                        </p>
                    </form>
                </div>
            </div>
            <div class="user signupBx">
                <div class="formBx">
                    <form action="" onsubmit="return false;">
                        <h2>Criando conta</h2>
                        <input type="text" name="Username" placeholder="Nome de Usuário" />
                        <input type="email" name="email" placeholder="Seu E-Mail" />
                        <input type="password" name="password" placeholder="Senha" />
                        <input type="password" name="confpass" placeholder="Confirme sua senha" />
                        <input type="submit" name="" value="Criar Conta" />
                        <p class="signup">
                            Já tem uma conta?
                            <a href="#" onclick="toggleForm();">Entrar.</a>
                        </p>
                    </form>
                </div>
                <div class="imgBx">
                    <img src="img/pista.png" alt="" />
                </div>
            </div>
        </div>
    </section>
</body>


</html>