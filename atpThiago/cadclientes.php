<?php 
	include "includes/conecta.php";
	
	$id = "";
	$nome = "";
	$telefone = "";
	$cpf = "";
	$dtnasc = "";
	$genero = "";

	if (isset ($_GET["id"])) {
		$id = $_GET["id"];
		$sql = "SELECT * FROM clientes WHERE id = $id";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);

		$nome = $row["nome"];
		$telefone = $row["telefone"];
		$cpf = $row["cpf"];
		$dtnasc = $row["dataNascimento"];
		$genero = $row["genero"];
	}

?>

	<?php
		include "includes/topo.php";
	?>
		<header>
			<h2>cadastro de clientes</h2>
		</header>

		<section>
			<?php 
				include "includes/menu.php";
			 ?>
	
			<article>
				<form action="recebecliente.php" method="post">		

					<input type="hidden" name="id" value="<?php echo $id; ?>">			
					<label for="nome">nome</label>
					<input type="text" name="nome" value="<?php echo $nome;?>"/>
									
					<label for="dtnasc"> data de nascimento</label>
					<input type="date" name="dtnasc" value="<?php echo $dtnasc;?>" />

					<label for="genero">genero::</label>	
					<select name="genero">
						<option value="m" <?php if ($genero == "m") {echo "selected";} ?>>masculino</option>
						<option value="f" <?php if ($genero == "f") {echo "selected";} ?>>feminino</option>
					</select>

					<label for="telefone">telefone</label>
					<input type="text" name="telefone" value="<?php echo $telefone;?>"/>

					<label for="cpf">cpf</label>
					<input type="text" name="cpf" value="<?php echo $cpf;?>"/>			

					<input type="submit">
				</form>

			</article>
		</section>

		<?php 
			include "includes/rodape.php";
		 ?>