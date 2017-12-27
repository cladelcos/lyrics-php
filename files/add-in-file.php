<?php
	$band = $_GET['urlCover'];
	$band = $_GET['band'];
	$album = $_GET['album'];
	// fwrite();

	//Parsing File ../php-validation/cover.php

	$file_php = file_get_contents("../php-validation/test.js");

	echo $file_php;
?>
<h1 id="test"></h1>