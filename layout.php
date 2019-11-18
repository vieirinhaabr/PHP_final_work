<?php 
  if (!isset($_SESSION)){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>POST IT!</title>
  <link rel="icon" href="https://cdn1.iconfinder.com/data/icons/andriod-app-logo/32/icon_p-128.png">

  <link href="static/css/fonts.css" rel="stylesheet">
  <link href="static/css/materialize.css" type="text/css" rel="stylesheet"/>
  <link href="static/css/style.css" rel="stylesheet">
  <link href="static/css/bootstrap-table.min.css" rel="stylesheet">
  <link href="static/css/bootstrap-table-materialize.min.css" rel="stylesheet">
</head>
<body>
<nav class="black lighten-1" role="navigation">
    <div class="nav-wrapper container border-bottom border-white"><a id="menu-item" href="#" class="brand-logo">POST IT!</a>
      <ul class="right hide-on-med-and-down">
        <li><a id="menu-item" href="home.php">Home</a></li>

        <?php if (isset($_SESSION["idusuario"])): ?>
          <li><a id="menu-item" href="categoria.php">Categoria</a></li>
          <li><a id="menu-item" href="produto.php">Produto</a></li>
          <li><a id="menu-item" href="usuario.php">Usuario</a></li>
          <li><a id="menu-item" href="sair.php">Sair</a></li>
          <li>Bem vindo <?= $_SESSION["nome"] ?></li>
        <?php else: ?>
          <li><a id="menu-item" href="index.php">Login</a></li>
        <?php endif; ?>
       
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="index.php">Home</a></li>
        <?php if (isset($_SESSION["idusuario"])): ?>
          <li><a id="menu-item" href="categoria.php">Categoria</a></li>
          <li><a id="menu-item" href="usuario.php">Usuario</a></li>
          <li><a id="menu-item" href="produto.php">Produto</a></li>
          <li><a id="menu-item" href="sair.php">Sair</a></li>
          <li>Bem vindo <?= $_SESSION["nome"] ?></li>
        <?php else: ?>
          <li><a id="menu-item" href="index.php">Login</a></li>
        <?php endif; ?>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="section no-pad-bot" id="index-banner" style="margin-bottom:10px;">
    <div class="container">
      
        <?php 
          echo $conteudo;
        ?>

    </div>
  </div>



    <footer class="page-footer fixed-bottom light-blue">
      <div class="footer-copyright">
        <div class="container">
          Lorem ipsum
        </div>
      </div>
    </footer>

  <script src="static/js/jquery-3.4.1.min.js"></script>
  <script src="static/js/materialize.js"></script>
  <script src="static/js/bootstrap-table.min.js"></script>
  <script src="static/js/bootstrap-table-materialize.min.js"></script>
  
  <script src="static/js/bootstrap-table-pt-BR.min.js"></script>
  <script src="static/js/init.js"></script>
  <script src='static/js/categoria.js'></script>
  <script src='static/js/usuario.js'></script>
  <script src='static/js/produto.js'></script>
  </body>
</html>
