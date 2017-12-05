<?php include '../sql/database.php'; ?>
<?php 
	// definições de host, database, usuário e senha
	$host = "localhost";
	$db   = "lyrics";
	$user = "root";
	$pass = "root";
	// conecta ao banco de dados
	$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysqli_error(),E_USER_ERROR); 
	// seleciona a base de dados em que vamos trabalhar
	mysql_select_db($db, $con);

	$band = $songName = $urlLyrics = $genre = $abbrBandName = $abbrBandAlbum =  "";

	if(isset($_GET['band'])){
		$band=$_GET['band'];
		$songName=$_GET['songName'];
		$urlLyrics=$_GET['urlLyrics'];
		$genre=$_GET['genre'];
		$abbrBandName=$_GET['abbrBandName'];
		$abbrBandAlbum=$_GET['abbrBandAlbum'];
		
		$query = "INSERT INTO lyrics_list SET band = '$band', songName = '$songName', urlLyrics = '$urlLyrics', genre = '$genre', coverAbbrNameBand = '$abbrBandName', coverAbbrNameAlbum = '$abbrBandAlbum'";
		// mysql_query($sql,$con);

		// executa a query
		$dados = mysql_query($query, $con) or die(mysql_error());
		// transforma os dados em um array
		$linha = mysql_fetch_assoc($dados);
		// calcula quantos dados retornaram
		$total = mysql_num_rows($dados);
	}
	else
	{
	}
	// Check connection
	// if($submit === false){
	    // die("ERROR: Could not connect. " . mysqli_connect_error());
	// }
	 

?>