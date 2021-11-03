
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- LINKs -->
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
        <link rel="stylesheet" href="./node_modules/nes.css/css/nes.min.css">
        <!-- <link rel="stylesheet" href="node_modules/nes.css/css/nes.css"> -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body class="align">

        <div class="login">

            <header class="login__header">
                <h2>Entrar</h2>
            </header>

            <form action="login.php" class="login__form" method="POST">

                <div>
                    <label for="email">Nome de Usuário:</label>
                    <input type="text" id="username" name="username" placeholder="username" class='nes-input'>
                </div>

                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Senha" class='nes-input'>
                </div>

                <div class="btn-div">
                    <input class="nes-btn" type="submit" name="btn_login" value="Entrar">
                    <input class="nes-btn is-success" name="btn_register" type="submit" value="Registrar">
                    
                </div>

            </form>

        </div>

    </body>

    </html>