<?php	
	include 'database.php'; 
	
	$nameTbSql = $_GET['tbNameSql'];
	
	$query = sprintf("SELECT * FROM $nameTbSql");

	// executa a query
	$dados = mysql_query($query, $con) or die(mysql_error());
	// transforma os dados em um array
	$linha = mysql_fetch_assoc($dados);
	// calcula quantos dados retornaram
	$total = mysql_num_rows($dados);
	
	$redirect = "../view/private-data.php";

	// header("location:$redirect");
?>

<h2>
	<?=
		$nameTbSql	
	?>
</h2>