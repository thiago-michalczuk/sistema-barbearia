<?php 
	include "includes/conecta.php";
	
	$id = "";
	$nome = "";
	$tempo = "";

	if (isset ($_GET["id"])) {
		$id = $_GET["id"];
		$sql = "SELECT * FROM tpcorte WHERE id = $id";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);

		$nome = $row["nome"];
		$tempo = $row["tempo"];
	}

?>

	<?php
		include "includes/topo.php";
	?>
		<header>
			<h2>cadastro de cortes</h2>
		</header>

		<section>
			<?php 
				include "includes/menu.php";
			 ?>
	
			<article>
				<form action="recebecortes.php" method="post">		

					<input type="hidden" name="id" value="<?php echo $id; ?>">			
					<label for="nome">nome</label>
					<input type="text" name="nome" value="<?php echo $nome;?>"/>
									
					<label for="tempo"> tempo estimado <br></label>
					<input type="time" name="tempo" step="1" value="<?php echo $tempo;?>" />

					<input type="submit">
				</form>

			</article>
		</section>

		<?php 
			include "includes/rodape.php";
		 ?> 	