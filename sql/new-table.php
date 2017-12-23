<?php 
	error_reporting(0);
	
	include "database.php";

	$band =  "";

	if(isset($_GET['band'])){
		$band=$_GET['band'];
		
		$query = "CREATE TABLE $band(id_band INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY, band VARCHAR(100), song_name VARCHAR(255), url_lyrics VARCHAR(255), genre VARCHAR(255), cover_abbr_name_band VARCHAR(255), cover_abbr_name_album VARCHAR(255))";
		// mysql_query($sql,$con);

		// executa a query
		$dados = mysql_query($query, $con) or die(mysql_error());
		// transforma os dados em um array
		$linha = mysql_fetch_assoc($dados);
		// calcula quantos dados retornaram
		$total = mysql_num_rows($dados);
	}

	$redirect = "../view/private-table.php";

	header("location:$redirect");
?>