<?php 

		include "includes/conecta.php";

	$id = $_POST["id"];
	$nome = $_POST["nome"];
	$barb = $_POST["barb"];
	$dtatd = $_POST["dtatd"];
	$tpcorte = $_POST["corte"];

	if (empty($id)) {

		$sql = "INSERT INTO agendamento (nome, barb, dtatd, tpcorte) VALUES

		('$nome', '$barb', '$dtatd', '$tpcorte')";	
		
	}else{
		
		$sql = "UPDATE agendamento SET
					nome = '$nome',
					barb = '$barb',
					tpcorte = '$tpcorte',
					dtatd = '$dtatd'
				WHERE
					id = '$id'";
	}
		$res = mysqli_query($conn, $sql);

		if ($res) {
			header("Location: listaagendamento.php");
		} else {
			echo "errou";
		}
	
	

?>