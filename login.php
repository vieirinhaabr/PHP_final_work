<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon" href="https://cdn1.iconfinder.com/data/icons/andriod-app-logo/32/icon_p-128.png">

    <link href="static/css/fonts.css" rel="stylesheet">
    <link href="static/css/materialize.css" type="text/css" rel="stylesheet"/>
    <link href="static/css/style.css" rel="stylesheet">
    <link href="static/css/bootstrap-table.min.css" rel="stylesheet">
    <link href="static/css/bootstrap-table-materialize.min.css" rel="stylesheet">
    <link href="static/css/bootstrap.css" rel="stylesheet">
    <link href="static/css/bootstrap-grid.css" rel="stylesheet">
    <link href="static/css/bootstrap-reboot.css" rel="stylesheet">
</head>
    <body>
        <video autoplay muted loop id="myVideo">
            <source src="content/background.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        
        <div class="content">
            <div class="border-bottom border-white">
                <h1 class="title-opaque">POST IT!</h1>
            </div>
            <br>
            <p>Faça upload de suas imagens para web!!</p>
            <br>
            <br>
            <div class="d-flex justify-content-center">
                <div class="d-flex flex-column">
                    <form method="post" action="/git/PHP_final_work/control/usuario/login.php" id="formularioLogin">
                        <div>
                            <label for="InputEmailLabel">Email</label>
                            <input type="email" id="email" name="email" aria-describedby="emailHelp" placeholder="Digite seu email">
                            <small id="emailHelp" class="form-text text-muted">Você não deve compatilhar seu email com ninguém.</small>
                        </div>
                        <br>
                        <div>
                            <label for="InputPasswordLabel">Senha</label>
                            <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="d-flex justify-content-center">
                            <button type="submit" id="button-login">Login</button>
                        </div>
                        <br>
                    </form>
                    <div class="d-flex justify-content-center">
                        <div class="d-flex flex-column">
                            <label for="InputEmailLabel"> Ainda não se cadastrou?</label>
                            <a href="cadastro.php"><button id="button-sign">Cadastre-se</button></a>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </body>
</html>

<script src="static/js/jquery-3.4.1.min.js"></script>
<script src="static/js/materialize.js"></script>
<script src="static/js/bootstrap-table.min.js"></script>
<script src="static/js/bootstrap-table-materialize.min.js"></script>
<script src="static/js/bootstrap-table-pt-BR.min.js"></script>
<script src="static/js/bootstrap.bundle.js"></script>
<script src="static/js/bootstrap.js"></script>