
	<?php
		include "includes/topo.php";
	?>
		<header>
			<h2>cabelaria jhon</h2>
			<p style= "text-align: right"> <a href="meuperfil.php">meu perfil</a></p>
			<p style= "text-align: right"> <a href="logout.php">sair</a></p>
		</header>

		<section>
			<?php 
				$_SESSION['pag'] = "lojainicio";
				include "includes/menu.php";
			?>
		  
			<article>
				<?php  
				echo "bem vindo ".$_SESSION['nome'];
				?>

			</article>
		</section>

	<?php 
		include "includes/rodape.php";
	?>
