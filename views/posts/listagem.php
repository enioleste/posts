<html>
	<head>
		<title>Postagem com PHP!! EnioLeste</title>
	</head>
	<body>

	<h1>Lista de Posts</h1>
	<form method="POST" action="/index.php?controller=PostsController&action=novo">
		<input type="submit" name="RealizarPost" value="Novo Post"><br><br>
	</form>


	<table border="1">
		<tr>
			<td width="200">Nome:</td>
			<td width="200">Postagem:</td>
			<td width="200">Data/Hora</td>
		</tr>
	<?php 
	//Realizando a interação com o foreach que vai percorrer todo o meu array $result, cada interação ele vai adicionando os dados na tabela.
	//$result = valor.
	//$iten = chave.
		foreach ($result as $iten) {
			$print = "<tr>
						<td width=\"200\">". $iten["nome"] ."</td>
						<td width=\"200\">". $iten["texto"] ."</td>
						<td width=\"200\">". $iten["data"] ."</td>
					  </tr>";
			echo $print;
			
	}

	?>

	</table>
	</body>
</html>