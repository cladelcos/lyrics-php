<?php 
	error_reporting(0);
	
	include '../sql/database.php';

	// definições de host, database, usuário e senha
	$host = "localhost";
	$db   = "lyrics";
	$user = "root";
	$pass = "root";
	// conecta ao banco de dados
	$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysqli_error(),E_USER_ERROR); 
	// seleciona a base de dados em que vamos trabalhar
	mysql_select_db($db, $con);

	$band =  "";

	if(isset($_GET['band'])){
		$band=$_GET['band'];
		
		$query = "CREATE TABLE $band(id_band INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY, band VARCHAR(100), songName VARCHAR(255), urlLyrics VARCHAR(255), genre VARCHAR(255), coverAbbrNameBand VARCHAR(255), coverAbbrNameAlbum VARCHAR(255))";
		// mysql_query($sql,$con);

		// executa a query
		$dados = mysql_query($query, $con) or die(mysql_error());
		// transforma os dados em um array
		$linha = mysql_fetch_assoc($dados);
		// calcula quantos dados retornaram
		$total = mysql_num_rows($dados);
	}

?>
<head>
     <?php 
        $nameTitle = "New Band";
        include '../paths/styles-page.php'; 
    ?>
</head>
<body>
    <div class="page-screen">
        <?php include "../paths/nav-private-index.php"; ?>
        <div class="body-content left-align max center">
            <h1>New Band Create Successful</h1>

            <?php include "../paths/buttons.php"; ?>
        </div>
    </div>
</body>
</html>