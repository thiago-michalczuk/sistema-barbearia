<?php
		include "includes/topo.php";
	?>
		<header>
			<h2>lista de usuarios</h2>
			<p style= "text-align: right"> <a href="meuperfil.php">meu perfil</a></p>
			<p style= "text-align: right"> <a href="logout.php">sair</a></p>
		</header>

		<section>
			<?php 
				$_SESSION['pag'] = "listausuarios";
				include "includes/menu.php";
			?>
		  
			<article>
				<a href="cadusuarios.php">cadastrar</a>
				<table>
					<tr>
						<td>id</td>
						<td>nome</td>
						<td>login</td>
					</tr>

					<?php
						include "includes/conecta.php";

						
						
						$sql = "SELECT id,nome, email FROM usuarios";
						$res = mysqli_query($conn, $sql);
				
						while ($row = mysqli_fetch_assoc($res)) {
							echo "<tr>

									<td>". $row['id'] ."</td>
									<td>". $row['nome'] ."</td>
									<td>". $row['email'] ."</td>
								</tr>";
						}
					?>

				</table>
			</article>
		</section>

	<?php 
		include "includes/rodape.php";
	?>
