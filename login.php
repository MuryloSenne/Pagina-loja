<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css" />
    <meta charset="utf-8">
    <title>Tela de Login</title>

</head>

<body id="login_byte ">
    <div id="container">
            <div class="login-container">

                    <h2>LOGIN</h2>
                      <div class="form-byte">
                            <?php
                                
                            if(isset( $_GET['success'])){
                                echo $_GET['success'];
                            }
                            ?>
                            <form action="loginController.php" method="post">
                                    <label for="username">Nome de Usuário:</label>
                                        <input type="text" id="username" name="username" required placeholder="Digite seu nome"><br><br>
                                    <label for="password">Senha:</label>

                                    <input type="password" id="password" name="password" required
                                        placeholder="Digite sua senha"><br><br>
                                    <button class="btnLogin" type="submit">
                                            <div class="loadingEntrar">entrar</div>
                                            <div class="loadingLogin"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path fill="none" stroke="white" stroke-dasharray="15" stroke-dashoffset="15"
                                                        stroke-linecap="round" stroke-width="2" d="M12 3C16.9706 3 21 7.02944 21 12">
                                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="15;0" />
                                                        <animateTransform attributeName="transform" dur="1.5s" repeatCount="indefinite"
                                                            type="rotate" values="0 12 12;360 12 12" />
                                                    </path>
                                                </svg></div>
                                    </button>
                                    <div class="cadastro">
                                        <a href="">se-cadastre!</a>
                                    </div>
                            </form>
                    </div>
            </div>
    </div>

    <script>
    let loadingEntrar = document.querySelector(".loadingEntrar");
    console.log(loadingEntrar)

    let loadingLogin = document.querySelector(".loadingLogin");
    console.log(loadingLogin)

    let btnLogin = document.querySelector(".btnLogin")
    console.log(btnLogin);

    btnLogin.addEventListener('click', () => {
        loadingEntrar.style.display = 'none'
        loadingLogin.style.display = 'block'

    })
    </script>
</body>

</html>