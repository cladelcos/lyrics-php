<?php 
	error_reporting(0);
	
	include 'database.php';
		$bandNameData = $songName = $urlLyrics = $genre = $abbrBandName = $abbrBandAlbum = "";

		$nameTbSql = $_GET['tbName'];
		$bandNameData = $_GET['bandNameForm'];
		$songName=$_GET['songNameForm'];
		$urlLyrics=$_GET['urlLyricsForm'];
		$genre=$_GET['genreBandForm'];
		$abbrBandName=$_GET['coverANBForm'];
		$abbrBandAlbum=$_GET['coverANAForm'];

		$query = "INSERT INTO $nameTbSql (band,song_name,url_lyrics, genre, cover_abbr_name_band, cover_abbr_name_album) values('".$bandNameData."', '".$songName."', '".$urlLyrics."', '".$genre."', '".$abbrBandName."', '".$abbrBandAlbum."')";

		// executa a query
		$dados = mysql_query($query, $con) or die(mysql_error());
		// transforma os dados em um array
		$linha = mysql_fetch_assoc($dados);
		// calcula quantos dados retornaram
		$total = mysql_num_rows($dados);
	}

	$redirect = "../view/private-data-select-table.php";

	// header("location:$redirect");

?>