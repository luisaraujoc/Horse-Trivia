
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
                <h2>Sign In</h2>
            </header>

            <form action="" class="login__form" method="POST">

                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="mail@address.com" class='nes-input'>
                </div>
                
                
                <div>
                    <label for="email">Nome</label>
                    <input type="Text" id="name" name="name" placeholder="Seu nome" class='nes-input'>
                </div>

                <div>
                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password" placeholder="Senha" class='nes-input'>
                </div>
                <div>
                    <label for="password">Confirme a senha:</label>
                    <input type="password" id="password" name="password" placeholder="Senha" class='nes-input'>
                </div>
                
                
                <div class="nes-select">
                    <label for="turma">Turma</label>
                        <select id="turma" name="turma" placeholder="Selecione..." class='nes-select default_select'>
                    
                </div>
                <br>
                <div>
                    <input class="nes-btn is-success" name="btn_register" type="submit" value="Registrar">
                </div>

                
                    
            </form>

        </div>

    </body>

    </html>