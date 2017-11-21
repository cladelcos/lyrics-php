<?php

	// definições de host, database, usuário e senha
	$host = "localhost";
	$db   = "lyrics";
	$user = "root";
	$pass = "";
	// conecta ao banco de dados
	$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysqli_error(),E_USER_ERROR); 
	// seleciona a base de dados em que vamos trabalhar
	mysql_select_db($db, $con);
	// cria a instrução SQL que vai selecionar os dados
	$query = sprintf("SELECT id, band, songName, urlLyrics, genre, cover FROM lyricslist");
	// executa a query
	$dados = mysql_query($query, $con) or die(mysql_error());
	// transforma os dados em um array
	$linha = mysql_fetch_assoc($dados);
	// calcula quantos dados retornaram
	$total = mysql_num_rows($dados);
?>


<!-- CREATE TABLE lyricsList(id int(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY, band varchar(100), songName varchar(100), urlLyrics varchar(100), genre varchar(100), cover varchar(100))

INSERT INTO lyricsList(band, songName, urlLyrics, genre, cover) VALUES("Linkin Park featuring Busta Rhymes", "We Made It", "https://genius.com/Busta-rhymes-we-made-it-lyrics", "Numetal", "linkin-park-ft-busta-rhymes-we-made-it.png"); -->