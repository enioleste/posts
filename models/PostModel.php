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
		$result = $querySelect->fetchAll();

		return $result;
	}
}	