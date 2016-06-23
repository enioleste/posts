<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php 
			$nome = $_POST["autor"]; 
			$texto = $_POST ["text"]; 
			$data = date('Y-m-d');
			$data .= ' '.date('H:i:s');
			//print_r($_POST);
		?>	

		<?php if (!$_POST) { ?>
		<h1>Faça sua postagem!<h1>
			<form method="POST" action="testanto.php">

				<font size="5px">Autor:</font>
				<input type="text" name="autor"/><br><br>
			
				<font size="5px">Texto:</font><br>
				<textarea cols="50" rows="6" name="text"></textarea><br><br>
			
				<input type="submit" name="postar" value="Postar"><br><br>
			</form>
		<?php }else{?>

		<h1>Postagem!!</h1>
		<font size="5px">Autor do Post:</font> <?php echo $nome;?><br><br>
		<font size="5px">Postagem:</font><br><br>
		<textarea cols="50" rows="6" name="text" readonly><?php echo $texto; ?></textarea><br><br>
		<font size="5px">Data e hora:</font> <?php echo $data ?>

		<?php }?>

	</body>
</html>