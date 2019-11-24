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
    <link href="node_modules/lightbox2/src/css/lightbox.css" rel="stylesheet" />
</head>
    <body class="body-after-login" onload="loadImages()">
        <div style="position: relative; padding-bottom: 15%; padding-top: 5%;" class="d-flex flex-column">
            <div style="padding-bottom: 4%;">
                <div>
                    <div style="padding-bottom:2%;">
                        <h1 style="color:white;" class="border-bottom"> Galeria de Imagens </h1>
                    </div>
                    <p style="color:white;">Imagens postadas por usuarios do Post It</p>
                </div>
            </div>
            <div class="gallery" id="gallery">
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
<script src="static/js/galery.js"></script>
<script src="node_modules/lightbox2/src/js/lightbox.js"></script>

<?php

$conteudo = ob_get_contents();

 ob_end_clean ();

include 'layout.php';

?>