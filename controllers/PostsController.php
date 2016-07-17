<?php

class PostsController {
	
	public function novo(){
		$nomeMensagem = "";
		$textoMensagem = "";
		//Realizando a verificação de entrada de valores.
		if ($_POST) {
			$nome = ""; 
			if (isset($_POST["autor"])) {
				$nome = $_POST["autor"]; 
			}

			$texto = "";
			if (isset($_POST["text"])) {
				$texto = $_POST["text"];
			}

			if ($nome == ""){
				$nomeMensagem = "Verificar Autor de post";
			}
			if ($texto == ""){
				$textoMensagem ="Verificar Texto de post";
			}
			//atribuindo à variaveis os valores recebidos do formulário via POST.
			$nome = $_POST["autor"]; 
			$texto = $_POST ["text"]; 
			$data = date('Y-m-d H:i:s');
			require __DIR__ ."/../models/PostModel.php";
			$cadastroPost = new PostModel();
			$cadastroPost->conectiondb();
			$cadastroPost->insertdb($nome,$texto,$data);
		}
		require __DIR__."/../views/posts/novo.php";

		//$num = 2;
		//$num4 = 3;
		//$CadastroPost->soma(3,4);
	}

}