<?php

require $_SERVER['DOCUMENT_ROOT']."/git/PHP_final_work/model/UsuarioModel.php";

$model = new UsuarioModel();

$email = $_POST["email"];
$senha = $_POST["senha"];

$usuario = $model->porEmailSenha($email, $senha);

if($usuario == false){
    http_response_code(401);
    echo "Usuário ou senha inválidos";
    header("Location: /git/PHP_final_work/login.php");
}else{
    session_start();
    $_SESSION["idusuario"] = $usuario["idusuario"];
    $_SESSION["nome"] = $usuario["nome"];
    echo "Seja bem vindo " . $usuario["nome"];
    header("Location: /git/PHP_final_work/home.php");
}

?>