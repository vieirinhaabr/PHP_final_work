<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

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
            <h1 class="title-opaque">POST IT!</h1>
            <p>Faça upload de suas imagens para web!!</p>
            <br>
            <br>
            <div class="d-flex justify-content-center">
                <form>
                    <div>
                        <label for="InputEmailLabel">Email address</label>
                        <input type="email" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">Você não deve compatilhar seu email com nimguém.</small>
                    </div>
                    <br>
                    <div>
                        <label for="InputPasswordLabel">Password</label>
                        <input type="password" id="InputPassword" placeholder="Password">
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="d-flex justify-content-center">
                        <button type="submit" id="myBtn">Login</button>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <div class="d-flex flex-column">
                            <label for="InputEmailLabel"> Ainda não se cadastrou?</label>
                            <button type="submit" id="myBtn">Cadastre-se</button>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                </form>
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