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
				include "includes/menu.php";
			?>
		  
			<article>
				<table #usuario>
					<tr>
						<td>id</td>
						<td>nome</td>
						<td>login</td>
						<td>-</td>
						<td>-</td>
					</tr>

					<?php
						include "includes/conecta.php";
						$_SESSION['pag'] = "index";
						$_SESSION['table'] = "usuarios";

						
						
						$sql = "SELECT id, nome, email FROM usuarios WHERE id = ".$_SESSION['id']."";
						$res = mysqli_query($conn, $sql);


						$row = mysqli_fetch_assoc($res);
							echo "<tr>

									<td>". $row['id'] ."</td>
									<td>". $row['nome'] ."</td>
									<td>". $row['email'] ."</td>
									<td><a href='cadusuarios.php?id=". $row['id']."'> editar </a></td>
									<td><a href='excluicad.php?id=".$row['id']."'> excluir </a></td>
								</tr>";
						
					?>

				</table>
			</article>
		</section>

	<?php 
		include "includes/rodape.php";
	
?>