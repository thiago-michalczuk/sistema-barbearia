<?php
		include "includes/topo.php";
		?>

	

		<header>
			<h2> lista de cortes</h2>
			<p style= "text-align: right"> <a href="meuperfil.php">meu perfil</a></p>
			<p style= "text-align: right"> <a href="logout.php">sair</a></p>
		</header>

		<section>
			<?php 
				$_SESSION['pag'] = "listacortes";
				$_SESSION['table'] = "tpcorte";
				include "includes/menu.php";
			 ?>
		  
			<article>
				<a href="cadcortes.php">cadastrar</a>
				<table>
					<tr>
						<td>id</td>
						<td>nome</td>
						<td>tempo estimado</td>
						<td>-</td>
						<td>-</td>
					</tr>

					<?php
						include "includes/conecta.php";
						
						$sql = "SELECT id, nome, tempo FROM tpcorte";
						$res = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_assoc($res)) {
							echo "<tr>

									<td>". $row['id'] ."</td>
									<td>". $row['nome'] ."</td>
									<td >". $row['tempo'] ."</td>
									<td><a href='cadcortes.php?id=". $row['id']."'> editar </a></td>
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