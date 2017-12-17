<?php
	include "database.php";



	// cria a instrução SQL que vai selecionar os dados
	$query = "SHOW TABLES";
	// executa a query
	$dados = mysql_query($query, $con) or die(mysql_error());
	// transforma os dados em um array
	$linha = mysql_fetch_assoc($dados);
	// calcula quantos dados retornaram
	$total = mysql_num_rows($dados);
?>