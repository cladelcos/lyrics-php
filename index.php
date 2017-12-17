<html lang="en">
<head>
    <?php
        $nameTitle = "Lyrics Around";
        $iconURL = "http://portaldoamazonas.com/wp-content/uploads/2016/04/brasil-capa-e1460639102455-256x256.png";
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
                <li><a href="#">Lyrics</a></li>
            </ul>
        </nav>
        <div class="body-content left-align max center">
            <?php error_reporting(0); ?>

            <?php
                include "sql/tables.php";
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
                                    $nameTable = $linha['Tables_in_id3984030_lyrics'];
                        ?>
                        <tr>
                            <td>
                                <a href="view/private-layout-songs.php?name=<?=$nameTable?>">
                                    <?= //Name tables List Code all_tables
                                        $linha['Tables_in_id3984030_lyrics'];
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