<?php 

		include "includes/conecta.php";

	$nome = $_POST["nome"];
	$dtent = $_POST["dtent"];
	$telefone = $_POST["telefone"];
	$cpf = $_POST["cpf"];
	$id = $_POST["id"];

	if (empty($id)) {

		$sql = "INSERT INTO barbeiros (nome, dtent, telefone, cpf) VALUES

		('$nome', '$dtent', '$telefone', '$cpf')";	
		
	}else{
		
		$sql = "UPDATE barbeiros SET
					nome = '$nome',
					dtent = '$dtent',
					telefone = '$telefone',
					cpf = '$cpf'
				WHERE
					id = '$id'";
	}
		$res = mysqli_query($conn, $sql);

		if ($res) {
			header("Location: listabarbeiros.php");
		} else {
			echo "errou";
		}
	
	

?>