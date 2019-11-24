<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <link rel="icon" href="https://cdn1.iconfinder.com/data/icons/andriod-app-logo/32/icon_p-128.png">

    <link href="static/css/fonts.css" rel="stylesheet">
    <link href="static/css/materialize.css" type="text/css" rel="stylesheet"/>
    <link href="static/css/style.css" rel="stylesheet">
    <link href="static/css/style_loading.css" rel="stylesheet">
    <link href="static/css/bootstrap-table.min.css" rel="stylesheet">
    <link href="static/css/bootstrap-table-materialize.min.css" rel="stylesheet">
    <link href="static/css/bootstrap.css" rel="stylesheet">
    <link href="static/css/bootstrap-grid.css" rel="stylesheet">
    <link href="static/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
</head>
    <body onload="write_on_usertype('Selecione')">
        <!-- <div id="loading"></div> -->
        <video autoplay muted loop id="myVideo">
            <source src="content/background.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        
        <div class="content">
            <div class="border-bottom border-white">
                <h1 class="title-opaque-sign">Cadastro</h1>
            </div>
            <br>
            <br>
            <div class="d-flex justify-content-center">
                <div class="cadastro-menu">
                    <form>
                        <div>
                            <label for="InputEmailLabel">Email</label>
                            <input type="email" id="InputEmail" aria-describedby="emailHelp" placeholder="Digite seu email">
                            <small id="emailHelp" class="form-text text-muted">Você não deve compatilhar seu email com ninguém.</small>
                        </div>
                        <br>
                        <div>
                            <label for="InputNameLabel">Nome (Apelido)</label>
                            <input type="text" minlength="5" id="InputNome" aria-describedby="nomeHelp" placeholder="Digite seu nome">
                        </div>
                        <div>
                            <label for="InputPasswordLabel">Senha</label>
                            <input type="password" minlength="5" id="InputPassword" placeholder="Digite sua senha">
                        </div>
                        <div>
                            <label for="InputRepeatPasswordLabel">Repita a Senha</label>
                            <input type="password" minlength="5" id="InputRepeatPassword" placeholder="Repita sua senha">
                        </div>
                        <div>
                            <label for="InputRepeatPasswordLabel">CPF ou CNPJ</label>
                            <div class="d-flex align-items-start">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span id="user-type-span" class="user-type-span"></span></button>
                                    <div class="dropdown-menu">
                                        <a href="javascript: write_on_usertype('CPF')" class="dropdown-item">CPF</a>
                                        <a href="javascript: write_on_usertype('CNPJ')" class="dropdown-item">CNPJ</a>
                                    </div>
                                </div>
                                <div style="padding-left: 20px; margin-bottom: -15px;" id="div-input-cpf-cnpj" class="div-input-cpf-cnpj"></div>
                            </div>
                            <div style="padding-left: 22%;" id="div-small-cpf-cnpj" class="div-small-cpf-cnpj"></div>
                        </div>
                        <br>
                        <br>
                        <div class="d-flex justify-content-center">
                            <button type="submit" id="button-login">Finalizar cadastro</button>
                        </div>
                        <br>
                    </form>
                    <div class="d-flex justify-content-center">
                        <div class="d-flex flex-column">
                            <label for="EmailLabel"> Já possui cadastro?</label>
                            <a href="index.php"><button id="button-sign">Login</button></a>
                        </div>
                    </div>
                    <br>
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
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<script src="static/js/validator.js"></script>