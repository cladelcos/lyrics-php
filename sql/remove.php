<?php 
	error_reporting(0);

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
<head>
     <?php 
        $nameTitle = "Remove Song";
        include '../paths/styles-page.php'; 
    ?>
</head>
<body>
    <div class="page-screen">
        <?php include "../paths/nav-private-index.php"; ?>
        <div class="body-content left-align max center">
            <h1>Data removed</h1>

            <?php include "../paths/buttons.php"; ?>
        </div>
    </div>
</body>
</html>