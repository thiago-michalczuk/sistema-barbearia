	<?php
		include "includes/topo.php";
	?>
		<header>
			<h2>agendamento</h2>
		</header>

		<section>
			<?php 
				include "includes/menu.php";
			 ?>
		  
			<article>
				<label for="agnd">agendamento</label>
				<input type="date" name="agnd" />
				<label for="tpCorte">tipo de corte</label>
				<input type="text" name="tpCorte" />
				<label for="gel">usar gel:</label>				
				<select name="gel">
					<option>sim</option>
					<option>nao</option>
				</select>
				<input type="submit">
			</article>

		</section>

		<?php 
			include "includes/rodape.php";
		 ?>
