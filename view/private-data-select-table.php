<html lang="en">
<head>
     <?php 
        $nameTitle = "Table Data Select - Songs";
        include '../paths/styles-page.php'; 
    ?>
</head>
<body>
    <div class="page-screen">
        <?php 
            include "../paths/nav-private-index.php"; 
        ?>
        <div class="body-content left-align max center">
            <?php error_reporting(0); ?>

            <?php 
                include "../sql/tables.php";
            ?>

            <br>
            <form action="private-data.php" method="GET">
                <select name="tbName">
                     <?php
                        // se o número de resultados for maior que zero, mostra os dados
                        if($total > 0) {
                            // inicia o loop que vai mostrar todos os dados
                            do {
                    ?>
                    <option value="<?=$linha['Tables_in_id3984030_lyrics']?>"><?=$linha['Tables_in_id3984030_lyrics']?></option>
                    <?php
                            // finaliza o loop que vai mostrar os dados
                            } while($linha = mysql_fetch_assoc($dados));
                        // fim do if 
                        }
                    ?>
                </select>
                <input type="submit" value="Show">
                <!-- <a href="../sql/show-data.php?tbSqlPass=<?=$tbName?>">
                    <button>Show Data</button>
                </a> -->
            </form>

            <h1><?= $linha['band']?></h1>

            <p>Covers will being in here.</p>
        </div>
    </div>
</body>
</html>