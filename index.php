<html lang="en">
<head>
    <?php
        $nameTitleHd = "Lyrics Around";
        $iconURL = "http://portaldoamazonas.com/wp-content/uploads/2016/04/brasil-capa-e1460639102455-256x256.png";
    ?>
    <link rel="icon" href="<?= $iconURL ?>">
    <meta charset="UTF-8">
    <title><?= $nameTitleHd ?></title>
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
    <div class="page-screen-index">
            <nav>
                
            </nav>
            <?php
                error_reporting(0);
                include "sql/tables.php";
                include "php-validation/letters.php";
            ?>

            <br>

            <div class="body-content left-align max center">
                <h1>Main Menu</h1>
                <table>
                    <thead>
                        <th>Bands</th>
                    </thead>
                    <tbody>
                        <?php
                            // se o número de resultados for maior que zero, mostra os dados
                            if($total > 0) {
                                // inicia o loop que vai mostrar todos os dados
                                do {
                                    $nameTable = $linha['Tables_in_lyrics'];
                        ?>
                        <tr>
                            <td>
                                <a href="view/layout-songs.php?tbName=<?=$nameTable?>">
                                    <?php 
                                        echo ucwords(str_replace('_', ' ', $linha['Tables_in_lyrics']))
                                    ?>
                                </a>
                            </td>
                        </tr>            
                        <?php
                                // finaliza o loop que vai mostrar os dados
                                } while($linha = mysql_fetch_assoc($dados));
                            // fim do if 
                            }
                        ?>
                    </tbody>
                </table>
            </div>


        </div>
    </div>
</body>
</html>