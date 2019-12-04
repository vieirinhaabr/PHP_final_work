<?php

require $_SERVER['DOCUMENT_ROOT']."/git/PHP_final_work/model/UsuarioModel.php";

$model = new UsuarioModel();

$codigo = $_POST["codigo"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$tipo_user = $_POST["tiposuser"];
$credential = $_POST["cadtipoinput"];

if($nome != "" && $email != "" && $senha != ""){
    if($tipo_user == "CPF" && strlen($credential) == 14){
        if($codigo > 0){
            $model->alterar($codigo, $nome, $email);
            echo "Alterado com sucesso";
            header("Location: /git/PHP_final_work/login.php");
        }else{
            $iduser = $model->inserir($nome, $email, $senha);
            $model->inserirCPF($iduser["idusuario"], $credential);
            echo "Inserido com sucesso";
            header("Location: /git/PHP_final_work/login.php");
        }
    }
    elseif($tipo_user == "CNPJ" && strlen($credential) == 20){
        if($codigo > 0){
            $model->alterar($codigo, $nome, $email);
            echo "Alterado com sucesso";
            header("Location: /git/PHP_final_work/login.php");
        }else{
            $iduser = $model->inserir($nome, $email, $senha);
            $model->inserirCNPJ($iduser["idusuario"], $credential);
            echo "Inserido com sucesso";
            header("Location: /git/PHP_final_work/login.php");
        }
    }
    else{
        header("Location: /git/PHP_final_work/cadastro.php");
    }
}
else{
    header("Location: /git/PHP_final_work/cadastro.php");
}


?>