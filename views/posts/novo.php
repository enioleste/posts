<html>
	<head>
		<title>Postagem com PHP!! EnioLeste</title>
	</head>
	<body>
			<h1>Faça sua postagem!<h1>
			<form method="POST" action="/index.php?controller=PostsController&action=novo">
				<font size="5px">Autor:</font>
				<input type="text" name="autor"/><br><br>
				<font size="5px">Texto:</font><br>
				<textarea cols="50" rows="6" name="text"></textarea><br><br>
				<input type="submit" name="postar" value="Postar"><br><br>
			</form>

	</body>
</html>