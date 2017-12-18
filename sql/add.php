<?php 
	error_reporting(0);
	
	include 'database.php';

	$nameTable = $band = $songName = $urlLyrics = $genre = $abbrBandName = $abbrBandAlbum =  "";

	if(isset($_GET['nameTbPass'])){
		$nameTable=$_GET['nameTbPass'];
		
		$bandNameData =$_GET['bandName'];
		$songName=$_GET['songName'];
		$urlLyrics=$_GET['urlLyrics'];
		$genre=$_GET['genre'];
		$abbrBandName=$_GET['coverNameBand'];
		$abbrBandAlbum=$_GET['coverNameAlbum'];

		$query = "INSERT INTO $nameTable SET band = $bandNameData, songName = $songName, urlLyrics = $urlLyrics, genre = $genre, coverAbbrNameBand = $abbrBandName, coverAbbrNameAlbum = $abbrBandAlbum";
		// mysql_query($sql,$con);

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
	<title>Document <?= $nameTable ?></title>
</head>
<body>
	<h1><?php echo $nameTable ?></h1>
	
</body>
</html>