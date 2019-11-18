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
    <link href="static/css/style.css" rel="stylesheet">
    <link href="static/css/bootstrap-table.min.css" rel="stylesheet">
    <link href="static/css/bootstrap-table-materialize.min.css" rel="stylesheet">
    <link href="static/css/bootstrap.css" rel="stylesheet">
    <link href="static/css/bootstrap-grid.css" rel="stylesheet">
    <link href="static/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
</head>
    <body>

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

<?php

$conteudo = ob_get_contents();

 ob_end_clean ();

include 'layout.php';

?>