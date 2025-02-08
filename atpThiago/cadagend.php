<?php 
	include "includes/conecta.php";
	
	$id = "";
	$nome = "";
	$barb = "";
	$dtatd = "";
	$corte = "";
	
	if (isset ($_GET["id"])) {
		$id = $_GET["id"];
		$sql = "SELECT * FROM agendamento WHERE id = $id";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);

		$nome = $row["nome"];
		$barb = $row["barb"];
		$dtatd = $row["dtatd"];
		$corte = $row["tpcorte"];
	}

?>

	<?php
		include "includes/topo.php";
	?>
		<header>
			<h2>cadastro de agendamento</h2>
		</header>

		<section>
			<?php 
				include "includes/menu.php";
			 ?>
	
			<article>
				<form action="recebeagend.php" method="post">		

					<input type="hidden" name="id" value="<?php echo $id; ?>">			
					<label for="nome">cliente</label>
					<select name="nome">
						<option>selecione</option>
						<?php
					 	$sql = "SELECT id, nome FROM clientes";
					 	$res = mysqli_query($conn, $sql);
					 	if($res){
					 		while ($row = mysqli_fetch_assoc($res)) {
					 			echo "<option>". $row['nome']."</option>";
					 		}
						}else{echo "<option> eroou </option>";}
					?>

					</select>	
					<label for="dtatd"> data de atendimento</label>
					<input type="date" name="dtatd" value="<?php echo $dtatd;?>"/>

					<label for="corte">tipo de corte:</label>	
					<select name="corte">
						<option>selecione</option>
						<?php
					 	$sql = "SELECT id, nome FROM tpcorte";
					 	$res = mysqli_query($conn, $sql);
					 	if($res){
					 		while ($row = mysqli_fetch_assoc($res)) {
					 			echo "<option>". $row['nome']."</option>";
					 		}
						}else{echo "<option> eroou </option>";}
					?>

					</select>

					<label for="barb">barbeiro</label>
					<select name="barb">
						<option>selecione</option>
						<?php
					 	$sql = "SELECT id, nome FROM barbeiros";
					 	$res = mysqli_query($conn, $sql);
					 	if($res){
					 		while ($row = mysqli_fetch_assoc($res)) {
					 			echo "<option>". $row['nome']."</option>";
					 		}
						}else{echo "<option> eroou </option>";}
					?>

					</select>

					<input type="submit">
				</form>

			</article>
		</section>

		<?php 
			include "includes/rodape.php";
		 ?>