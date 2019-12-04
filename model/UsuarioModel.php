<?php

require $_SERVER['DOCUMENT_ROOT']."/git/PHP_final_work/data/DataBase.php";

class UsuarioModel{
	
	private $database;

	function __construct(){
		$this->database = new DataBase();
	}

	public function porEmailSenha($email, $senha){
		$conn = $this->database->getConnection();
		
		$query = $conn->prepare("SELECT idusuario, nome, email FROM usuario WHERE email = :email and senha = :senha");
		
		$senhaCripto = sha1($senha);

		$query->bindParam(":email", $email);

		$query->bindParam(":senha", $senhaCripto);
		
		$query->execute();
					
		return $query->fetch();
	}
	
	public function inserir($nome, $email, $senha){
	
		$conn = $this->database->getConnection();

		$query = $conn->prepare("INSERT INTO usuario (nome,email,senha) VALUES (:nome, :email, :senha)");
		$senhaCripto = sha1($senha);
		$query->bindParam(":nome", $nome);
		$query->bindParam(":email", $email);
		$query->bindParam(":senha", $senhaCripto);
		$query->execute();

		$query = $conn->prepare("SELECT idusuario FROM usuario WHERE email = :email");
		$query->bindParam(":email", $email);
		$query->execute();

		return $query->fetch();
	}

	public function inserirCPF($iduser, $credential){
		$conn = $this->database->getConnection();

		$query = $conn->prepare("INSERT INTO pessoafisica (idusuario,cpf) VALUES (:idusuario, :cpf)");
		$query->bindParam(":idusuario", $iduser);
		$query->bindParam(":cpf", $credential);
		$query->execute();
	}

	public function inserirCNPJ($iduser, $credential){
		$conn = $this->database->getConnection();

		$query = $conn->prepare("INSERT INTO pessoajuridica (idusuario,cnpj) VALUES (:idusuario, :cnpj)");
		$query->bindParam(":idusuario", $iduser);
		$query->bindParam(":cnpj", $credential);
		$query->execute();
	}

	public function alterar($idUsuario, $nome, $email){

		$conn = $this->database->getConnection();
				
		$query = $conn->prepare("UPDATE usuario set nome = :nome, email = :email where idusuario = :idusuario");
				
		$query->bindParam(":nome", $nome);
		$query->bindParam(":email", $email);
		$query->bindParam(":idusuario", $idUsuario);
				
		$query->execute();
			
	}
}