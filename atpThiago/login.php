<?php 
	
	$login = $_POST["login"];
	$senha = $_POST["senha"];

	include "includes/conecta.php";

	$sql = "SELECT * FROM usuarios WHERE 
		email = '$login' AND senha = '$senha'";

	$res = mysqli_query($conn, $sql);
	$qntReg = mysqli_num_rows($res);	
	if ($qntReg > 0) {

		session_start();
		$row = mysqli_fetch_assoc($res);
		$_SESSION['id'] = $row['id'];
		$_SESSION['nome'] = $row['nome'];

		header("Location: lojainicio.php");
	}else{
		header("Location: index.php?erro=1");
	}
 ?>