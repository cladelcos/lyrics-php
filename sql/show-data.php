<?php	
	include 'database.php'; 
	
	

	$nameTitleTable = $_POST['name'];
	
	$query = "SELECT * FROM $nameTitleTable";

	// executa a query
	$dados = mysql_query($query, $con) or die(mysql_error());
	// transforma os dados em um array
	$linha = mysql_fetch_assoc($dados);
	// calcula quantos dados retornaram
	$total = mysql_num_rows($dados);
?>