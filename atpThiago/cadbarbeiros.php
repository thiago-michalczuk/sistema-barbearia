<?php 
	include "includes/conecta.php";
	
	$id = "";
	$nome = "";
	$dtent = "";
	$telefone = "";
	$cpf = "";

	if (isset ($_GET["id"])) {
		$id = $_GET["id"];
		$sql = "SELECT * FROM barbeiros WHERE id = $id";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);

		$nome = $row["nome"];
		$telefone = $row["telefone"];
		$cpf = $row["cpf"];
		$dtent = $row["dtent"];
	}
		include "includes/topo.php";
	?>
		<header>
			<h2>cadastro de barbeiros</h2>
		</header>

		<section>
			<?php 
				include "includes/menu.php";
			 ?>
	
			<article>
				<form action="recebebarb.php" method="post">		

					<input type="hidden" name="id" value="<?php echo $id; ?>">			
					<label for="nome">nome</label>
					<input type="text" name="nome" value="<?php echo $nome;?>"/>
									
					<label for="dtent"> data de entrada</label>
					<input type="date" name="dtent" value="<?php echo $dtent;?>" />

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