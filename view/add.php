<!DOCTYPE html>
<html lang="en">
<head>
	 <?php 
        echo '<link rel="icon" href="http://portaldoamazonas.com/wp-content/uploads/2016/04/brasil-capa-e1460639102455-256x256.png">';
        echo '<meta charset="UTF-8">';
        echo '<title>Lyrics</title>';
    ?>
    <style>
    	<?php 
            include '../css/reset.css';
            include '../css/computer.css';
            include '../css/mobile.css';
            include '../css/general.css';
    	?>
    </style>
</head>
<body>
	<div class="page-screen">
        <nav>
            <ul>
                <li><a href="../index.php">Lyrics</a></li>
            </ul>
        </nav>
        <div class="body-content left-align max center">
            <?php error_reporting(0); ?>

            <?php include "../sql/database.php"; ?>
			<?php include "../php-validation/cover.php"; ?>

            <div class="body-content left-align max center">
                <h1>Add New Song</h1>
                <form action="../sql/insert-data.php" method="GET">
                    <p> Band: <input type="text" name="band"> </p> 
                    <p> Song Name: <input type="text" name="songName"> </p>
                    <p> URL Lyrics: <input type="text" name="urlLyrics"> </p>
                    <p> Genre: <input type="text" name="genre"> </p>
                    <p> Abbreviation Band Name: <input type="text" name="abbrBandName"> </p>
                    <p> Abbreviation Band Album: <input type="text" name="abbrBandAlbum"> </p>

                    <br>
                    <input type="submit" value="Enter">
                </form>
            </div>


        </div>
    </div>
</body>
</html>