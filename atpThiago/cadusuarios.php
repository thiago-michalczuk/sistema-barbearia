
	<?php
	include "includes/conecta.php";
	
	$id = "";
	$nome = "";
	$login = "";
	$senha = "";

	if (isset ($_GET["id"])) {
		$id = $_GET["id"];
		$sql = "SELECT * FROM usuarios WHERE id = $id";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);

		$nome = $row["nome"];
		$login = $row["email"];
		$senha = $row["senha"];
	}
		include "includes/topo.php";
	?>
		<header>
			<h2>cadastro de usuarios</h2>
		</header>

		<section>
			<?php 
				include "includes/menu.php";
			 ?>
	
			<article>
				<form action="recebeusuario.php" method="post">		

					<input type="hidden" name="id" value="<?php echo $id; ?>">			
					<label for="nome">nome</label>
					<input type="text" name="nome" value="<?php echo $nome;?>"/>
									
					<label for="login"> email</label>					
					<input type="text" name="login" value="<?php echo $login;?>"/>

					<label for="senha">senha</label>
					<input type="password" name="senha" value="<?php echo $senha;?>"/>			

					<input type="submit">
				</form>

			</article>
		</section>

		<?php 
			include "includes/rodape.php";
		 ?>