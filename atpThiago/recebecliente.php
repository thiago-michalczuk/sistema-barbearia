<?php 

		include "includes/conecta.php";

	$nome = $_POST["nome"];
	$dtnasc = $_POST["dtnasc"];
	$genero = $_POST["genero"];
	$telefone = $_POST["telefone"];
	$cpf = $_POST["cpf"];
	$id = $_POST["id"];

	if (empty($id)) {

		$sql = "INSERT INTO clientes (nome, dataNascimento, genero, telefone, cpf) VALUES

		('$nome', '$dtnasc', '$genero', '$telefone', '$cpf')";	
		
	}else{
		
		$sql = "UPDATE clientes SET
					nome = '$nome',
					dataNascimento = '$dtnasc',
					genero = '$genero',
					telefone = '$telefone',
					cpf = '$cpf'
				WHERE
					id = '$id'";
	}
		$res = mysqli_query($conn, $sql);

		if ($res) {
			header("Location: listaclientes.php");
		} else {
			echo "errou";
		}
	
	

?>