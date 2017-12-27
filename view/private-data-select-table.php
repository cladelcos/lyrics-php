<html lang="en">
<head>
     <?php 
        $nameTitleHd = "Table Data Select - Songs";
        include '../paths/styles-page.php'; 
    ?>
</head>
<body>
    <div class="page-screen">
        <?php 
            include "../paths/nav-private-index.php"; 
        ?>
        <div class="body-content left-align max center">
            <?php 
                error_reporting(0); 
                include "../sql/tables.php";
                include "../php-validation/letters.php";
            ?>
            <h1><?=$nameTitleHd?></h1>

            <br>
            <form action="private-data.php" method="GET">
                <select name="tbName">
                     <?php
                        // se o número de resultados for maior que zero, mostra os dados
                        if($total > 0) {
                            // inicia o loop que vai mostrar todos os dados
                            do {
                    ?>
                    <option value="<?=$linha['Tables_in_lyrics']?>"><?php echo ucwords(str_replace('_', ' ', $linha['Tables_in_lyrics']))?></option>
                    <?php
                            // finaliza o loop que vai mostrar os dados
                            } while($linha = mysql_fetch_assoc($dados));
                        // fim do if 
                        }
                        mysql_free_result($dados);
                    ?>
                </select>
                <input type="submit" value="Show">
                <!-- <a href="../sql/show-data.php?tbSqlPass=<?=$tbName?>">
                    <button>Show Data</button>
                </a> -->
            </form>

            <h1><?= $linha['band']?></h1>
        </div>
    </div>
</body>
</html>