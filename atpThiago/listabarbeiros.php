<?php
		include "includes/topo.php";
		?>

	

		<header>
			<h2> lista de funcionarios</h2>
			<p style= "text-align: right"> <a href="meuperfil.php">meu perfil</a></p>
			<p style= "text-align: right"> <a href="logout.php">sair</a></p>
		</header>

		<section>
			<?php 
				$_SESSION['pag'] = "listabarbeiros";
				$_SESSION['table'] = "barbeiros";
				include "includes/menu.php";
			 ?>
		  
			<article>
				<a href="cadbarbeiros.php">cadastrar</a>
				<table>
					<tr>
						<td>id</td>
						<td>nome</td>
						<td style="width: 130px">telefone</td>
						<td>dataEntrada</td>
						<td>-</td>
						<td>-</td>
					</tr>

					<?php
						include "includes/conecta.php";
						
						$sql = "SELECT id, nome, telefone, dtent FROM barbeiros";
						$res = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_assoc($res)) {
							echo "<tr>

									<td>". $row['id'] ."</td>
									<td>". $row['nome'] ."</td>
									<td >". $row['telefone'] ."</td>	
									<td>". $row['dtent'] ."</td>
									<td><a href='cadbarbeiros.php?id=". $row['id']."'> editar </a></td>
									<td><a href='excluicad.php?id=".$row['id']."'> excluir </a></td>
								</tr>";
						}
					?>

				</table>
			</article>
		</section>
			  <?php 
			include "includes/rodape.php";
		 ?>