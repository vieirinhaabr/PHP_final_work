<?php
	ob_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>

    <link href="static/css/fonts.css" rel="stylesheet">
    <link href="static/css/materialize.css" type="text/css" rel="stylesheet"/>
    <link href="static/css/style_loading.css" rel="stylesheet">
    <link href="static/css/bootstrap-table.min.css" rel="stylesheet">
    <link href="static/css/bootstrap-table-materialize.min.css" rel="stylesheet">
    <link href="static/css/bootstrap.css" rel="stylesheet">
    <link href="static/css/bootstrap-grid.css" rel="stylesheet">
    <link href="static/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="static/css/dropzone.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
    <body class="body-after-login">
        <div style="position: relative; padding-bottom: 15%; padding-top: 5%;" class="d-flex flex-column">
            <div style="padding-bottom: 4%;">
                <div>
                    <div style="padding-bottom:2%;">
                        <h1 style="color:white;" class="border-bottom"> UPLOAD </h1>
                    </div>
                    <p style="color:white;">Faça upload de suas imagens para o Post It</p>
                </div>
            </div>
            <div style="width: 100%; height: 450px; border-style: hidden; border-radius: 0px;" class="border-upload row justify-content-center">
                <div style="width: 45%; height: 350px; margin: auto; border-color: white;" class="border-upload d-flex flex-column">
                    <div class="upload-area d-flex justify-content-center"  id="uploadfile" style="margin: auto;">
                        <div id="content-align" style="margin: auto;" class="d-flex justify-content-center">
                            <div id="joke-text" class="d-flex flex-column">
                                <div class="d-flex justify-content-center">
                                    <h4 id="h4-joke-text" style="color: white; padding-bottom: 1px;"> Drag and Drop </h4>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <h6 style="color: white; padding-bottom: 10%;"> Arraste a imagem até este quadrado </h6>
                                </div>
                                <img src="https://www.pngkey.com/png/full/50-505769_gallery-gallery-white-icon-png.png" class="center" height="60px" width="70px">
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin: auto;">
                    <h4 style="color: white; padding-bottom: 1px;"> - OU - </h4>
                </div>
                <div style="width: 30%; height: 350px; margin: auto; border-style: hidden;" class="border-upload d-flex flex-column">
                    <div style="margin: auto;">
                        <div class="d-flex justify-content-center">
                            <h4 style="color: white; padding-bottom: 1px;"> Selecione </h4>
                        </div>
                        <div class="d-flex justify-content-center">
                            <h6 style="color: white; padding-bottom: 10%;"> Selecione o arquivo pelo explorer </h6>
                        </div>
                        <button id="uploadfile-button" class="button-upload"> Escolher </button>
                        <input type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple accept='image/*'/>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<script src="static/js/dropzone.js"></script>
<script src="static/js/upload.js"></script>

<?php

$conteudo = ob_get_contents();

 ob_end_clean ();

include 'layout.php';

?>