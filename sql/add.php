<?php 
	error_reporting(0);
	
	include 'database.php';

	$nameTable = $band = $songName = $urlLyrics = $genre = $abbrBandName = $abbrBandAlbum =  "";

	if(isset($_GET['bandName'])){
		$nameTable=$_GET['bandName'];
		
		$bandNameData =$_GET['bandNameData'];
		$songName=$_GET['songName'];
		$urlLyrics=$_GET['urlLyrics'];
		$genre=$_GET['genre'];
		$abbrBandName=$_GET['abbrBandName'];
		$abbrBandAlbum=$_GET['abbrBandAlbum'];

		$query = sprintf("INSERT INTO $nameTable SET band = $bandNameData, songName = $songName, urlLyrics = $urlLyrics, genre = $genre, coverAbbrNameBand = $abbrBandName, coverAbbrNameAlbum = $abbrBandAlbum");
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
        $nameTitle = "Add Song";
        include '../paths/styles-page.php'; 
    ?>
</head>
<body>
    <div class="page-screen">
        <?php include "../paths/nav-private-index.php"; ?>
        <div class="body-content left-align max center">
            <h1>Insert data Successful</h1>

		<!-- <h1><?= $nameTable ?></h1> -->
            <?php include "../paths/buttons.php"; ?>
        </div>
    </div>
</body>
</html>