<nav>
	<ul id="menu">
		<li><a href="lojainicio.php"<?php if ($_SESSION['pag'] == "lojainicio") {
			echo " class='active'";} ?>>inicio</a></li>
		<li><a href="listausuarios.php" <?php if ($_SESSION['pag'] == "listausuarios") {
			echo " class='active'";} ?>>usuarios</a></li>
		<li><a href="listaclientes.php" <?php if ($_SESSION['pag'] == "listaclientes") {
			echo " class='active'";} ?>>clientes</a></li>
		<li><a href="listabarbeiros.php" <?php if ($_SESSION['pag'] == "listabarbeiros") {
			echo " class='active'";} ?>>barbeiros</a></li>
		<li><a href="listacortes.php" <?php if ($_SESSION['pag'] == "listacortes") {
			echo " class='active'";} ?>>cortes</a></li>
		<li><a href="listaagendamento.php" <?php if ($_SESSION['pag'] == "listaagendamento"){
			echo " class='active'";} ?>>agendamento</a></li>
	</ul>
</nav>