<!DOCTYPE html>
<html>
	<head>
		<title>cabelaria jao - Área restrita</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/atpEstilo.css" rel="stylesheet">
	</head>
	<body>
		<div>
			<p style="text-align:center"> realize o login para a area restrita.</p>

			<?php 
				if (isset($_GET['erro'])){
					echo '<p style="text-align:center;color:red">usuario e/ou senha invalidos.</p>';
				}
				if (isset($_GET['autentica'])){
					echo '<p style="text-align:center;color:red">sem permissao.</p>';
					
				}

			?>
			<form action="login.php" method="post">
				<label for="login">login</label>
				<input type="text" name="login" id="login" />

				<label for="senha">senha</label>
				<input type="password" name="senha" id="senha" /><br><br>

				<input type="submit" value="entrar">

			</form>
		</div>
		<?php 
			include "includes/rodape.php";
		 ?>
		 