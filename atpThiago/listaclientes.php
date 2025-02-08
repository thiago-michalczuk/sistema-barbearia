
		<?php
		include "includes/topo.php";
		?>

	

		<header>
			<h2> lista de clientes</h2>
			<p style= "text-align: right"> <a href="meuperfil.php">meu perfil</a></p>
			<p style= "text-align: right"> <a href="logout.php">sair</a></p>
		</header>

		<section>
			<?php 


				$_SESSION['pag'] = "listaclientes";
				$_SESSION['table'] = "clientes";
				include "includes/menu.php";
			 ?>
		  
			<article>
				<a href="cadclientes.php">cadastrar</a>
				<table>
					<tr>
						<td>id</td>
						<td>nome</td>
						<td>cpf</td>
						<td>-</td>
						<td>-</td>
					</tr>

					<?php
						include "includes/conecta.php";
						
						$sql = "SELECT id,nome, cpf FROM clientes";
						$res = mysqli_query($conn, $sql);
						
						while ($row = mysqli_fetch_assoc($res)) {
							echo "<tr>

									<td>". $row['id'] ."</td>
									<td>". $row['nome'] ."</td>
									<td>". $row['cpf'] ."</td>
									<td><a href='cadclientes.php?id=". $row['id']."'> editar </a></td>
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