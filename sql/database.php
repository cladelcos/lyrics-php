
<html>
	<head>
		
		<link rel="stylesheet" href="../css/reset.css">
		<link rel="stylesheet" href="../css/general.css">
	</head>
	<body>	
		<?php

			// definições de host, database, usuário e senha
			$host = "localhost";
			$db   = "devmedia";
			$user = "root";
			$pass = "";
			// conecta ao banco de dados
			$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysqli_error(),E_USER_ERROR); 
			// seleciona a base de dados em que vamos trabalhar
			mysql_select_db($db, $con);
			// cria a instrução SQL que vai selecionar os dados
			$query = sprintf("SELECT id, nome, telefone FROM cadastro");
			// executa a query
			$dados = mysql_query($query, $con) or die(mysql_error());
			// transforma os dados em um array
			$linha = mysql_fetch_assoc($dados);
			// calcula quantos dados retornaram
			$total = mysql_num_rows($dados);

		?>
		<br>
		<h2 class="bg-headers">Info Generate to SQL in PHP:</h2>
		<br>

		<?php
		    // se o número de resultados for maior que zero, mostra os dados
		    if($total > 0) {
		        // inicia o loop que vai mostrar todos os dados
		        do {
		?>
		            <p>[<?= $linha['id']?>] || <?= $linha['nome']?> / <?= $linha['telefone']?></p>
		<?php
		        // finaliza o loop que vai mostrar os dados
		        }while($linha = mysql_fetch_assoc($dados));
		    // fim do if 
		    }
		?>
		<h1>others results</h1>

		<?php
		    // tira o resultado da busca da memória
		    mysql_free_result($dados);
		?>
	</body>
</html>