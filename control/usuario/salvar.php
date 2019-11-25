<?php

require $_SERVER['DOCUMENT_ROOT']."/git/PHP_final_work/model/UsuarioModel.php";

$model = new UsuarioModel();

$codigo = $_POST["codigo"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

if($codigo > 0){
    $model->alterar($codigo, $nome, $email);
    echo "Alterado com sucesso";
    header("Location: /git/PHP_final_work/login.php");
}else{
    $model->inserir($nome, $email, $senha);
    echo "Inserido com sucesso";
    header("Location: /git/PHP_final_work/login.php");
}


?>