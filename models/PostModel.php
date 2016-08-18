<?php

class PostModel {
	private $pdo;

	public function conectiondb(){

		$host = "localhost";
		$user = "root";
		$pass = "91474004";
		$dbname = "postagem";
		//realizando a conexão com o banco de dados com o PDO.
		try {
			$this->pdo = new PDO("mysql:host=localhost;dbname=postagem","root","91474004");
		} catch (Exception $e) {
			echo $e->getMessage();
		}	
	}
	public function insertdb($nome,$texto,$data){
	//Realizando o INSERT seguro com o prepare
		$queryComPlaceHolder = "INSERT INTO post (nome,texto,data) VALUES ('%s','%s','%s')";
		$query = sprintf($queryComPlaceHolder,$nome,$texto,$data);
		$this->pdo->query($query);
	}

	public function selectdb(){
		$querySelect = $this->pdo->prepare('SELECT * FROM post');
		$querySelect->execute();
		//O metodo fetchall tras todos os dados cadastrados no banco na tabela post
		$result = $querySelect->fetchAll();
		//Fiz o return para retornar todos os dados da query qye eu fiz, essa variavel sera usada
		//em minha view para fazer a exibição.
		return $result;
	}
}	