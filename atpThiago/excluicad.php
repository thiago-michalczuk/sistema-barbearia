<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "atp");
if ($conn == false) {
	die("erro: nao conseguiu conectar no mysql.". mysqli_connect_error());
}
	$id = $_GET['id'];
	$sql = "DELETE FROM ".$_SESSION['table']." WHERE id = $id";
	$res = mysqli_query($conn, $sql);
	header("Location: ". $_SESSION['pag'].".php");
	 
?>