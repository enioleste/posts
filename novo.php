<html>
	<head>
		<title>Postagem com PHP!! EnioLeste</title>
	</head>
	<body>

		<?php
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
			}
		?>
		<!-- Verificando se foi nao foi POST  e se os campos estao preenchidos ai entrará nesta condição.-->
		<?php if (!$_POST or ($_POST and $nomeMensagem != "" or $textoMensagem != "")) { ?>

			<h1>Faça sua postagem!<h1>
			<form method="POST" action="novo.php">

				<font size="5px">Autor:</font>
				<input type="text" name="autor"/><br><br>
				<?php 
					if ($nomeMensagem != ""){
						echo $nomeMensagem;
					}
				?>
				<font size="5px">Texto:</font><br>
				<textarea cols="50" rows="6" name="text"></textarea><br><br>
				<?php 
					if ($textoMensagem != ""){
						echo $textoMensagem;
					}
				?>
				<input type="submit" name="postar" value="Postar"><br><br>
			</form>

		<?php } else  { ?>
			<?php 
			//As variaveis estao recebendo os valores enviados pelo formulario atraves do metodo POST.
				$nome = $_POST["autor"]; 
				$texto = $_POST ["text"]; 
				$data = date('Y-m-d');
				$data .= ' '.date('H:i:s');
			?>	
			<!--Quando e dado o submit aparece esta outra parte do formulario onde sera mostrado os dados do post realizado-->
			<?php
				$host = "localhost";
				$user = "root";
				$pass = "91474004";
				$dbname = "postagem";
				//realizando a conexão com o banco de dados com o PDO.
				try {
					$pdo = new PDO("mysql:host=localhost;dbname=postagem","root","91474004");
				} catch (Exception $e) {
					echo $e->getMessage();
				}	
				//Realizando o INSERT seguro com o PREPARE
				$insertseguro = $pdo->prepare("INSERT INTO post (nome,texto,data) VALUES (:nome,:texto,:data)");
				$insertseguro->bindValue (":nome",$nome);
				$insertseguro->bindValue (":texto",$texto);
				$insertseguro->bindValue (":data",$data);
				$insertseguro->execute();
			?>
			
			<h1>Postagem!!</h1>
			<font size="5px">Autor do Post:</font> <?php echo $nome;?><br><br>
			<font size="5px">Postagem:</font><br><br>
			<div ><?php echo $texto; ?></div><br><br>
			<font size="5px">Data e hora:</font> <?php echo $data ?>

		<?php }?>

	</body>
</html>