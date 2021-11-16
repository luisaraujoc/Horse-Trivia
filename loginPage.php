<?php
session_start();
require_once("sys/user.function.php");
$user = new User();


// Login

if($user->is_loggedin()!=""){
    $user->redirect('room.php');
}

if(isset($_POST['btn_login']))
{

    $uname = strip_tags($_POST['username_mail']);
	$umail = strip_tags($_POST['username_mail']);
	$upass = strip_tags($_POST['password']);
		
	if($user->doLogin($uname,$umail,$upass))
	{
		$user->redirect('room.php');
	}
	else
	{
		$error = "Usuario/Senha Inválidos! Tente novamente!";
	}	
}

// Register 

if (isset($_POST['btn_signup'])) {
	$uname = strip_tags($_POST['username']);
	$umail = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);

	if ($uname == "") {
		$error[] = "Digite um nome de usuário!";
	} else if ($umail == "") {
		$error[] = "Preencha o campo e-mail!";
	} else if (!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
		$error[] = 'Por favor, coloque um email válido!';
	} else if ($upass == "") {
		$error[] = "Preencha o campo senha!";
	} else if (strlen($upass) < 6) {
		$error[] = "A senha precisa de 6 caracteres ou mais!";
	} else {
		try {
			$stmt = $user->runQuery("SELECT user_name, user_email FROM users WHERE user_name=:uname OR user_email=:umail");
			$stmt->execute(array(':uname' => $uname, ':umail' => $umail));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			if ($row['user_name'] == $uname) {
				$error[] = "Nome de usuário já existe!";
			} else if ($row['user_email'] == $umail) {
				$error[] = "E-mail já foi usado!";
			} else {
				if ($user->register($uname, $umail, $upass)) {
					$user->redirect('LoginPage.php?joined');
				}
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
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

                            <div id="error">
                                <?php
                                    if(isset($error))
                                    {
                                        ?>
                                        <div class="alert alert-danger">
                                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                                        </div>
                                        <?php
                                    }
                                ?>
                            </div>
                            <!-- Error div -->
                            <input type="text" name="username_mail" placeholder="Nome de Usuário" />
                            <input type="password" name="password" placeholder="Senha" />
                            <!-- Campos de Login -->
                            <input type="submit" name="btn_login" value="Entrar" />
                            <!-- Botão de login -->
                            <p class="signin">
                                Não tem uma conta?
                                <a href="#" onclick="toggleForm();">Crie uma conta.</a>
                            </p>
                            <!-- Toggle Button para Registro -->
                        </form>
                        <!-- Formulário de login -->
                    </div>
                    <!-- FormBX end -->
                </div>
                <!-- User sign In Box end -->
                <div class="user signupBx">
                    <div class="formBx">
                        <form action="" onsubmit="return false;">
                            <h2>Criando conta</h2>
                            <input type="text" name="username" placeholder="Nome de Usuário" />
                            <input type="email" name="email" placeholder="Seu E-Mail" />
                            <input type="password" name="password" placeholder="Senha" />
                            
                            <input type="submit" name="btn_signup" value="Criar Conta" />
                            <p class="signup">
                                Já tem uma conta?
                                <a href="#" onclick="toggleForm();">Entrar.</a>
                            </p>
                        </form>
                        <!-- Formulário de registro -->
                    </div>
                    <!-- Form Box end -->
                    <div class="imgBx">
                        <img src="img/pista.png" alt="" />
                    </div>
                    <!-- IMG Box -->
                </div>
                <!-- User Sign Up Box end -->
            </div>
            <!-- Container Div -->
        </section>
        <!-- Login Section -->
    </body>
</html>