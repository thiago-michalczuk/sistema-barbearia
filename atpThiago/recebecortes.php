<?php 

		include "includes/conecta.php";

	$nome = $_POST["nome"];
	$tempo = $_POST["tempo"];
	$id = $_POST["id"];

	if (empty($id)) {

		$sql = "INSERT INTO tpcorte (nome, tempo) VALUES

		('$nome', '$tempo')";	
		
	}else{
		
		$sql = "UPDATE tpcorte SET
					nome = '$nome',
					tempo = '$tempo'
				WHERE
					id = '$id'";
	}
		$res = mysqli_query($conn, $sql);

		if ($res) {
			header("Location: listacortes.php?tempo=".$tempo."");
		} else {
			echo "errou";
		}
	
	

?>