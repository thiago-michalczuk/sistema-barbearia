<?php
		include "includes/topo.php";
		?>

	

		<header>
			<h2>agenda</h2>
			<p style= "text-align: right"> <a href="meuperfil.php">meu perfil</a></p>
			<p style= "text-align: right"> <a href="logout.php">sair</a></p>
		</header>

		<section>
			<?php 

				$_SESSION['pag'] = "listaagendamento";
				$_SESSION['table'] = "agendamento";		
				include "includes/menu.php";
			 ?>
		  
			<article>
				<a href="cadagend.php">marcar atendimento</a>
				<table>
					<tr>
						<td>id</td>
						<td>cliente</td>
						<td>tipoCorte</td>
						<td>barbeiro</td>
						<td>data corte</td>
						<td>-</td>
						<td>-</td>
					</tr>

					<?php
						include "includes/conecta.php";
						
						$sql = "SELECT id, nome, tpcorte, barb, dtatd FROM agendamento";
						$res = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_assoc($res)) {
							echo "<tr>

									<td>". $row['id'] ."</td>
									<td>". $row['nome'] ."</td>
									<td>". $row['tpcorte'] ."</td>
									<td >". $row['barb'] ."</td>	
									<td>". $row['dtatd'] ."</td>
									<td><a href='cadagend.php?id=". $row['id']."'> editar </a></td>
									<td><a href='excluicad.php?id=". $row['id']."'> excluir </a></td>
								</tr>";
						}
					?>

				</table>
			</article>
		</section>
			  <?php 
			include "includes/rodape.php";
		 ?>