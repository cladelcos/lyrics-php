<?php 
	// definições de host, database, usuário e senha

	if($_GET['id'] != 0) {
		include '../sql/database.php'; 

		$id = "";

		$id = $_GET['id'];
		
		$query = "DELETE FROM lyrics_list WHERE id = '$id'";
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

?>