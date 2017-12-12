<?php	
	if($_GET['name'] != "") {
		include 'database.php'; 

		$nameTable = "";
		$nameTable = $_GET['name'];
		
		$query = "SELECT * FROM $nameTable";
		// $query = "SELECT * FROM avenged_sevenfold";


		// mysql_query($sql,$con);

		// executa a query
		$dados = mysql_query($query, $con) or die(mysql_error());
		// transforma os dados em um array
		$linha = mysql_fetch_assoc($dados);
		// calcula quantos dados retornaram
		$total = mysql_num_rows($dados);
	}
?>