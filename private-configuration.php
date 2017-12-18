<html lang="en">
<head>
    <?php
        // error_reporting(0);
        $nameTitle = "Pages Configurations";
    ?>
    <link rel="icon" href="<?= $iconURL ?>">
    <meta charset="UTF-8">
    <title><?= $nameTitle ?></title>
    <style>
        <?php 
            include 'css/reset.css';
            include 'css/general.css';
            include 'css/cover-cd.css';
            include 'css/computer.css';
        ?>
    </style>
</head>
<body>
    <div class="page-screen">
        <nav>
            <ul>
                <li><a href="../view/private-layout-songs.php">Layout</a></li>
                <li><a href="#">Actions</a>
                    <ul>
                        <li><a href="../private-configuration.php">Tables</a></li>
                        <li><a href="../view/private-data.php">Data</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="body-content left-align max center">
            <?php 
                include "sql/tables.php";
            ?>

            <br>

            <h1><?=$nameTitle;?></h1>

            <table>
                <thead>
                    <th colspan="3">Page</th>
                </thead>
                <tbody>
                    <?php
                        // se o número de resultados for maior que zero, mostra os dados
                        if($total > 0) {
                            // inicia o loop que vai mostrar todos os dados
                            do {
                                $nameTbPass = $linha['Tables_in_id3984030_lyrics'];
                    ?>
                    <tr>
                        <td><a href="view/private-layout-songs.php?nameTb=<?=$nameTbPass?>"><?=$linha['Tables_in_id3984030_lyrics']?></a></td>
                        <td><a href="sql/drop-page.php?nameTb=<?=$nameTbPass?>">Remove</a></td>
                    </tr>
                    <?php
                                
                            // finaliza o loop que vai mostrar os dados
                            }while($linha = mysql_fetch_assoc($dados));
                        // fim do if 
                        }
                    ?>
                    <?php
                        // tira o resultado da busca da memória
                        mysql_free_result($dados);
                    ?>
                    <form action="sql/new-table.php" method="GET">
                        <tr>
                            <td><input type="text" name="band"></td>
                            <td><input type="submit" value="Add"></td>
                        </tr>
                    </form>
                </tbody>                
            </div>
            <br>    

        </div>
    </div>
</body>
</html>