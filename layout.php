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
  <title>Loja</title>

  <!-- CSS  -->
  <link href="static/css/fonts.css" rel="stylesheet">
  <link href="static/css/materialize.css" type="text/css" rel="stylesheet"/>
  <link href="static/css/style.css" rel="stylesheet">
  <link href="static/css/bootstrap-table.min.css" rel="stylesheet">
  <link href="static/css/bootstrap-table-materialize.min.css" rel="stylesheet">
</head>
<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>

        <?php if (isset($_SESSION["idusuario"])): ?>
          <li><a href="categoria.php">Categoria</a></li>
          <li><a href="produto.php">Produto</a></li>
          <li><a href="usuario.php">Usuario</a></li>
          <li><a href="sair.php">Sair</a></li>
          <li>Bem vindo <?= $_SESSION["nome"] ?></li>
        <?php else: ?>
          <li><a href="login.php">Login</a></li>
        <?php endif; ?>
       
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="index.php">Home</a></li>
        <?php if (isset($_SESSION["idusuario"])): ?>
          <li><a href="categoria.php">Categoria</a></li>
          <li><a href="usuario.php">Usuario</a></li>
          <li><a href="produto.php">Produto</a></li>
          <li><a href="sair.php">Sair</a></li>
          <li>Bem vindo <?= $_SESSION["nome"] ?></li>
        <?php else: ?>
          <li><a href="login.php">Login</a></li>
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



    <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Lorem ipsum</h5>
          <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Lorem ipsum</h5>
          <ul>
            <li><a class="white-text" href="#!">Lorem ipsum</a></li>
            <li><a class="white-text" href="#!">Lorem ipsum</a></li>
            <li><a class="white-text" href="#!">Lorem ipsum</a></li>
            <li><a class="white-text" href="#!">Lorem ipsum</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Lorem ipsum</h5>
          <ul>
            <li><a class="white-text" href="#!">Lorem ipsum</a></li>
            <li><a class="white-text" href="#!">Lorem ipsum</a></li>
            <li><a class="white-text" href="#!">Lorem ipsum</a></li>
            <li><a class="white-text" href="#!">Lorem ipsum</a></li>
          </ul>
        </div>
      </div>
    </div>
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
