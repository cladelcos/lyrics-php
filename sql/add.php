<?php 
	error_reporting(0);
	
	include 'database.php';

	$nameTbSql = $_GET['tbSqlPass'];
	if(isset($_GET['tbSqlPass'])){
		$nameTb = "";
		
		$bandNameData = $_GET['bandNameForm'];
		$songName=$_GET['songNameForm'];
		$urlLyrics=$_GET['urlLyricsForm'];
		$genre=$_GET['genreForm'];
		$abbrBandName=$_GET['coverNameBandForm'];
		$abbrBandAlbum=$_GET['coverNameAlbumForm'];

		$query = "INSERT INTO $nameTbSql SET band = $bandNameData, song_name = $song_name, url_lyrics = $urlLyrics, genre = $genre, cover_abbr_name_band = $abbrBandName, cover_abbr_name_album = $abbrBandAlbum";

		// executa a query
		$dados = mysql_query($query, $con) or die(mysql_error());
		// transforma os dados em um array
		$linha = mysql_fetch_assoc($dados);
		// calcula quantos dados retornaram
		$total = mysql_num_rows($dados);
	}

	$redirect = "../private-configuration.php";

	// header("location:$redirect");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADD - <?= $bandNameData ?></title>
</head>
<body>
	<h1> NO - <?= $nameTbSql ?></h1>
	
</body>
</html>