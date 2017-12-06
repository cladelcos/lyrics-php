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
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="../js/test.js"></script>

	<div class="page-screen">
        <nav>
            <ul>
                <li><a href="../index.php">Lyrics</a></li>
            </ul>
        </nav>
        <div class="body-content left-align max center">
            <?php error_reporting(0); ?>

            <?php include "../sql/database.php"; ?>
            

            <div class="body-content left-align max center">
                <?php
                    // se o número de resultados for maior que zero, mostra os dados
                    if($total > 0) {
                        // inicia o loop que vai mostrar todos os dados
                        do {
                ?>
                
                <p>
                    <?= $linha['id']?> || <?= $linha['band']?> || <?= $linha['songName']?> || <?= $linha['urlLyrics']?> ||  <?= $linha['genre']?>
                    <?php $identifier = $linha['id']; ?>
                    <a href="../sql/remove-data.php?id=<?=$identifier?>">REMOVE</a>
                </p>
                
                <?php
                        // finaliza o loop que vai mostrar os dados
                        }while($linha = mysql_fetch_assoc($dados));
                    // fim do if 
                    }
                ?>
            </div>


        </div>
    </div>
</body>
</html>