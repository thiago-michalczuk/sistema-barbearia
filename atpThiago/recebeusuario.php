<?php 

		include "includes/conecta.php";

	$nome = $_POST["nome"];
	$senha = $_POST["senha"];
	$login = $_POST["login"];
	$id = $_POST["id"];

	if (empty($id)) {

		$sql = "INSERT INTO  usuarios (nome, email, senha) VALUES ('$nome','$login','$senha')";
		$res = mysqli_query($conn, $sql);
		if ($res) {
			header("Location: listausuarios.php");

			} else {
			echo "errou";
		}
	}else{
		$sql = "UPDATE usuarios SET
					nome = '$nome',
					email = '$login',
					senha = '$senha'
				WHERE
					id = '$id'";
		
	
		$res = mysqli_query($conn, $sql);
		if ($res) {

			header("Location: meuperfil.php");
		} else {
			echo "errou";
		}
	}
	

?>