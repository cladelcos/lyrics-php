<?php 
	error_reporting(0);

	// definições de host, database, usuário e senha

	include 'database.php'; 
	if($_GET['id'] != 0) {

		$nameTable = $id = "";

		$nameTable = $_GET['name'];
		$id = $_GET['id'];
		
		$query = "DELETE FROM $nameTable WHERE id = '$id'";
		// mysql_query($sql,$con);

		// executa a query
		$dados = mysql_query($query, $con) or die(mysql_error());
		// transforma os dados em um array
		$linha = mysql_fetch_assoc($dados);
		// calcula quantos dados retornaram
		$total = mysql_num_rows($dados);
	}
	else {
		echo '<h1>Dado nao Removido</h1>';
	}

	$redirect = "../private-configuration.php";

	header("location:$redirect");
?>