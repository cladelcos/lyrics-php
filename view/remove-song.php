<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
        $nameTitle = "Remove Song";
        include '../paths/styles-page.php'; 
    ?>
</head>
<body>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="../js/test.js"></script>

	<div class="page-screen">
        <?php include "../paths/nav-private-index.php"; ?>
        <?php error_reporting(0); ?>

        <div class="body-content left-align max center">
            <?php include "../sql/database.php"; ?>

            <?php
                // se o número de resultados for maior que zero, mostra os dados
                if($total > 0) {
                    // inicia o loop que vai mostrar todos os dados
                    do {
            ?>
            
            <p>
                <?= $linha['id']?> || <?= $linha['band']?> || <?= $linha['songName']?> || <?= $linha['urlLyrics']?> ||  <?= $linha['genre']?>
                <?php $identifier = $linha['id']; ?>
                <a href="../sql/remove.php?id=<?=$identifier?>">REMOVE</a>
            </p>
            
            <?php
                    // finaliza o loop que vai mostrar os dados
                    }while($linha = mysql_fetch_assoc($dados));
                // fim do if 
                }
            ?>
        </div>
    </div>
</body>
</html>